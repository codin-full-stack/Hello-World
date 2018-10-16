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
if(post2) {
    post2.innerHTML = leftDays + ' days left until Christmas!' +'<br><br>' + 'Kalėdinės Prekės internetu | pigu.lt‎';
}

// var post3 = document.querySelector('.post:nth-child(2) .img');
// post3.innerHTML = 



var post4 = document.querySelectorAll('.post:nth-child(4) .post-description');
if(post4.length) {
    for (i = 0; i < post4.length; ++i) {
        post4[i].style.border ="1px solid blue";
        post4[i].style.backgroundColor ="yellow";   
    }
}

var post6 = document.querySelectorAll('.post:nth-child(6) .post-description');
var len = post6.length;
if(len) {
    for (var i = 0; i < len; i++ ) {
        post6[i].style.backgroundColor = "blue";
        post6[i].style.color = "green";
    }
}

var forgotPassElement = document.querySelector(".forgot-pass-link");
if(forgotPassElement) {
    forgotPassElement.addEventListener("click", function () {
        forgotPassElement.innerHTML = "Kita karta nepamirsk";
    }); 
}

var termsPrivacyElement = document.querySelector(".terms-privacy");
if(termsPrivacyElement) {
    termsPrivacyElement.addEventListener("click", function () {
        termsPrivacyElement.innerHTML = "Nera";
    }); 
}
