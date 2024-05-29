    // JavaScript code here
    const preloadImages = (selector = 'img') => {
        return new Promise((resolve) => {
            imagesLoaded(document.querySelectorAll(selector), {background: true}, resolve);
        });
    };

    const preloadFonts = id => {
        return new Promise((resolve) => {
            WebFont.load({
                typekit: {
                    id: id
                },
                active: resolve
            });
        });
    };

    // Usage example
    preloadImages('YOUR_IMAGE_SELECTOR').then(() => {
        console.log('Images preloaded');
    });

    preloadFonts('YOUR_TYPEKIT_ID').then(() => {
        console.log('Fonts preloaded');
    });