$(document).ready(function() {
    var i = 0;
    var txt = "ADMIN PANEL";
    var speed = 50;
    setInterval(function() {
        if (i < txt.length) {
            document.getElementById("service").innerHTML += txt.charAt(i);
            i++;
        }
    }, 200);

    setInterval(function() {
        if (i == txt.length) {
            document.getElementById("service").innerHTML = "";
            i = 0;
        }
    }, 3099);
});