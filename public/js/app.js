//const showElement = document.getElementById('item')
//showElement.scrollIntoView({behavior: "smooth"});

let today = new Date().toISOString().slice(0, 10);
document.getElementById("todayInput").value = today;

let tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate() + 7).toISOString().slice(0,10);
document.getElementById("inWeekInput").value = tomorrow;