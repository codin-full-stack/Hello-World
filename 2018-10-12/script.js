var nowDate = new Date().getTime();
var xmasDate = new Date('2018-12-25').getTime();
var leftMiliseconds = xmasDate - nowDate;
var dayMiliseconds = (1000 * 60 * 60 * 24);
var leftDays = Math.floor(leftMiliseconds / dayMiliseconds);

console.log(leftDays + " days left until Christmas!");

var leftDaysEl = document.querySelector(".left-time");
leftDaysEl.innerHTML = leftDays + " days left until Christmas!";
leftDaysEl.style.color = "green";

console.log(leftDaysEl);

var post2 = document.querySelector('.post:nth-child(2) .post-description');
post2.innerHTML = leftDays + ' days left until Christmas!' +'<br><br>' + 'Kalėdinės Prekės internetu | pigu.lt‎';

// var post3 = document.querySelector('.post:nth-child(2) .img');
// post3.innerHTML = 