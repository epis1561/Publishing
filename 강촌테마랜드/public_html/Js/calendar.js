// // 달력 생성
// const makeCalendar = (date) => {
// 	// 현재 년도와 월 받아오기
// 	const currentYear = new Date(date).getFullYear();
// 	var currentMonth = new Date(date).getMonth() + 1;



// 	// 첫날의 요일 구하기 - 초기 시작위치를 위해서
// 	const firstDay = new Date(date.setDate(1)).getDay();
// 	// 마지막 날짜 구하기
// 	const lastDay = new Date(currentYear, currentMonth, 0).getDate();

// 	// 남은 박스만큼 다음달 날짜 표시
// 	const limitDay = firstDay + lastDay;
// 	const nextDay = Math.ceil(limitDay / 7) * 7;

// 	let htmlDummy = '';

// 	// 한달전 날짜 표시하기
// 	for (let i = 0; i < firstDay; i++) {
// 		htmlDummy += `<div class="noColor"></div>`;
// 	}

// 	// 이번달 날짜 표시하기
// 	for (let i = 1; i <= lastDay; i++) {
// 		htmlDummy += `<div>${i}</div>`;
// 	}

// 	// 다음달 날짜 표시하기
// 	for (let i = limitDay; i < nextDay; i++) {
// 		htmlDummy += `<div class="noColor"></div>`;
// 	}
//   switch(currentMonth){
//     case 1:
//       currentMonth="JANUARY"
//       break;
//     case 2:
//       currentMonth="FABRURY"
//       break;
//     case 3:
//       currentMonth="MARCH"
//       break;
//     case 4:
//       currentMonth="APRIL"
//       break;
//     case 5:
//       currentMonth="MAY"
//       break;
//     case 6:
//       currentMonth="JUNE"
//       break;
//     case 7:
//       currentMonth="JULY"
//       break;
//     case 8:
//       currentMonth="AUGUST"
//       break;
//     case 9:
//       currentMonth="SEPTEMBER"
//       break;
//     case 10:
//       currentMonth="OCTOBER"
//       break;
//     case 11:
//       currentMonth="NOVEMBER"
//       break;
//     case 12:
//       currentMonth="DECEMBER"
//       break;
//   }
// 	document.querySelector(`.dateBoard`).innerHTML = htmlDummy;
// 	document.querySelector(`.dateTitle`).innerText = `${currentMonth} ${currentYear}`;
// }


// const date = new Date();

// makeCalendar(date);

// // 이전달 이동
// document.querySelector(`.prevDay`).onclick = () => {
// 	makeCalendar(new Date(date.setMonth(date.getMonth() - 1)));
// }

// // 다음달 이동
// document.querySelector(`.nextDay`).onclick = () => {
// 	makeCalendar(new Date(date.setMonth(date.getMonth() + 1)));
// }
