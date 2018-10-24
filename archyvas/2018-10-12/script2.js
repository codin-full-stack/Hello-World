var today = new Date();

var one_day=1000*60*60*24;

var day = new Date(today.getFullYear(), 0, 1);

var d = (Math.floor((today.getTime()-day.getTime())/one_day));

// var d = (Math.floor(today.getTime()/one_day-day.getTime()/one_day));

document.write(d);


if (today.getMonth()==11 && today.getDate()>25) {
    xmas.setFullYear(xmas.getFullYear()+1);
}


// var d = (Math.ceil((xmas.getTime()-today.getTime())/(one_day)));

// document.write(d);

console.log(Math.ceil((xmas.getTime()-today.getTime())/(one_day))+
" days left until Christmas!");