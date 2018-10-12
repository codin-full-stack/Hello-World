var today = new Date();

var one_day=1000*60*60*24;

var day = new Date(today.getFullYear(), 0, 1);

var d = (Math.floor((today.getTime()-day.getTime())/one_day));

// var d = (Math.floor(today.getTime()/one_day-day.getTime()/one_day));

document.write(d);