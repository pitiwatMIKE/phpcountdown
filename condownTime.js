// Update the count down every 1 second
function pad(num, size=2) {
    num = num.toString();
    while (num.length < size) num = "0" + num;
    return num;
}

let timecountdow = document.getElementsByClassName("timecountdown")
let countdown = document.getElementsByClassName("countdown");

setInterval(function () {

  for (i in timecountdow) {
    // Get today's date and time
    var now = new Date().getTime();
    // Find the distance between now and the count down date
    var distance = parseInt(timecountdow[i].value) - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    countdown[i].innerHTML = pad(hours) + ":" + pad(minutes) + ":" + pad(seconds);

    // If the count down is finished, write some text
    if (distance < 0) {
    //   clearInterval(x);
      countdown[i].innerHTML = "00:00:00";
    }
  }
}, 1000);
