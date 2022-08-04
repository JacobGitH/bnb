//const showElement = document.getElementById('item')
//showElement.scrollIntoView({behavior: "smooth"});

let today = new Date().toISOString().slice(0, 10);
document.getElementById("todayInput").value = today;

let d = new Date();
let sevenDaysFromNow = d.setDate(d.getDate() + 7);
sevenDaysFromNow = new Date(sevenDaysFromNow).toISOString().slice(0, 10);
document.getElementById("inWeekInput").value = sevenDaysFromNow;