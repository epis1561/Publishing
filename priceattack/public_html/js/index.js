import { Row } from './row.js';


      const closeCtrl = document.querySelectorAll('.preview  .preview__close');
      // GSAP 및 Flip 플러그인을 로드한 후에 실행될 코드
      // gsap 객체를 통해 GSAP 기능과 Flip 플러그인에 접근할 수 있음
      gsap.registerPlugin(Flip);

      // preview Items
      const previewItems = [...document.querySelectorAll('.preview > .preview__item')];
      // initial rows
      const rows = [...document.querySelectorAll('.row')];
      // cover element
      const cover = document.querySelector('.cover');
      // close ctrl
     
      const body = document.body;

      // Row instance array
      let rowsArr = [];
      rows.forEach((row, position) => {
          rowsArr.push(new Row(row, previewItems[position]));
      });

      let isOpen = false;
      let isAnimating = false;
      let currentRow = -1;
      let mouseenterTimeline;

      for (const row of rowsArr) {

          row.DOM.el.addEventListener('mouseenter', () => {
              if (isOpen) return;

              gsap.killTweensOf([row.DOM.images, row.DOM.title]);

              mouseenterTimeline = gsap.timeline()
              .addLabel('start', 0)
              .to(row.DOM.images, {
                  duration: 0.4,
                  ease: 'power3',
                  startAt: {
                      scale: 1.0,
                     
                  },
                  scale: 1,
                  xPercent: 0,
                  opacity: 1,
                  stagger: -0.035
              }, 'start')
              .set(row.DOM.title, {transformOrigin: '0% 50%'}, 'start')
              .to(row.DOM.title, {
                  duration: 0.1,
                  ease: 'power1.in',
                  yPercent: -100,
              }, 'start')
              .to(row.DOM.title, {
                  duration: 0.5,
                  ease: 'expo',
                  startAt: {
                      yPercent: 100,
                      rotation: 15
                  },
                  yPercent: 0,
                  rotation: 0
              }, 'start+=0.1');
          });

          row.DOM.el.addEventListener('mouseleave', () => {
              if (isOpen) return;

              gsap.killTweensOf([row.DOM.images, row.DOM.title]);

              gsap.timeline()
              .addLabel('start')
              .to(row.DOM.images, {
                  duration: 0.4,
                  ease: 'power4',
                  opacity: 1,
                  scale: 1.0
              }, 'start')
              .to(row.DOM.title, {
                  duration: 0.1,
                  ease: 'power1.in',
                  yPercent: -100,
                  
              }, 'start')
              .to(row.DOM.title, {
                  duration: 0.5,
                  ease: 'expo',
                  startAt: {
                      yPercent: 100,
                      rotation: 15
                  },
                  yPercent: 0,
                  rotation: 0
              }, 'start+=0.1');
          });

          // Open a row and reveal the grid
          row.DOM.el.addEventListener('click', () => {
              if (isAnimating) return;
              isAnimating = true;

              isOpen = true;

              currentRow = rowsArr.indexOf(row);

              gsap.killTweensOf([cover, rowsArr.map(row => row.DOM.title)]);

              gsap.timeline({
                  onStart: () => {
                      body.classList.add('oh');
                      row.DOM.el.classList.add('row--current');
                      row.previewItem.DOM.el.classList.add('preview__item--current');

                      gsap.set(row.previewItem.DOM.images, {opacity: 0});

                      // set cover to be on top of the row and then animate it to cover the whole page
                      gsap.set(cover, {
                          height: row.DOM.el.offsetHeight-1, // minus border width
                          top: row.DOM.el.getBoundingClientRect()['top'],
                          opacity: 1
                      });

                      gsap.set(row.previewItem.DOM.title, {
                          yPercent: -100,
                          rotation: 15,
                          transformOrigin: '100% 50%'
                      });

                  },
                  onComplete: () => isAnimating = false
              })
              .addLabel('start', 0)
              .to(cover, {
                  duration: 0.9,
                  ease: 'power4.inOut',
                  height: window.innerHeight,
                  top: 0,
              }, 'start')
              // animate all the titles out
              .to(rowsArr.map(row => row.DOM.title), {
                  duration: 0.5,
                  ease: 'power4.inOut',
                  yPercent: (_, target) => {
                      return target.getBoundingClientRect()['top'] > row.DOM.el.getBoundingClientRect()['top'] ? 100 : -100;
                  },
                  rotation: 0
              }, 'start')
              .add(() => {
                  
                  const flipstate = Flip.getState(row.DOM.images, {simple: true});
                  row.previewItem.DOM.grid.prepend(...row.DOM.images);
                  Flip.from(flipstate, {
                      duration: 0.9,
                      ease: 'power4.inOut',
                      //absoluteOnLeave: true,
                      stagger: 0.04,
                  })
                  // other images in the grid
                  .to(row.previewItem.DOM.images, {
                      duration: 0.9,
                      ease: 'power4.inOut',
                      startAt: {scale: 0, yPercent: () => gsap.utils.random(0,200)},
                      scale: 1,
                      opacity: 1,
                      yPercent: 0,
                      stagger: 0.04
                  }, 0.04*(row.DOM.images.length))
              }, 'start')
              .to(row.previewItem.DOM.title, {
                  duration: 1,
                  ease: 'power4.inOut',
                  yPercent: 0,
                  rotation: 0,
                  
              }, 'start')
              .to(closeCtrl, {
                  duration: 1,
                  ease: 'power4.inOut',
                  opacity: 1
              }, 'start');

          });

      }

    // Close the grid and show back the rows
    closeCtrl.forEach(element => {
        element.addEventListener('click', () => {
        if (isAnimating) return;
        isAnimating = true;
        isOpen = false;
        // 모든 .preview__item 요소에 대해 반복합니다.
        rowsArr.forEach((row) => {
            gsap.timeline({
                defaults: { duration: 0.5, ease: 'power4.inOut' },
                onStart: () => body.classList.remove('oh'),
                onComplete: () => {
                     row.DOM.el.classList.remove('row--current');
                     row.previewItem.DOM.el.classList.remove('preview__item--current');
                    isAnimating = false;
                }
            })
            .addLabel('start', 0)
            .to([row.DOM.images, row.previewItem.DOM.images], {
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                onComplete: () => row.DOM.imagesWrap.prepend(...row.DOM.images)
            }, 0)
            .to(row.previewItem.DOM.title, {
                duration: 0.6,
                yPercent: 100
            }, 'start')
            .to(closeCtrl, {
                opacity: 0
            }, 'start')
            .to(cover, {
                ease: 'power4',
                height: 0,
                top: row.DOM.el.getBoundingClientRect().top + row.DOM.el.offsetHeight / 2
            }, 'start+=0.4')
            .to(cover, {
                duration: 0.3,
                opacity: 0
            }, 'start+=0.9')
            .to(rowsArr.map(row => row.DOM.title), {
                yPercent: 0,
                stagger: {
                    each: 0.03,
                    grid: 'auto',
                    from: currentRow
                }
            }, 'start+=0.4');
        });
    });
});

// Preload images and fonts
// Promise.all([preloadImages('.cell__img-inner'), preloadFonts('gdf6msi')]).then(() => {
//     document.body.classList.remove('loading')
// });
    