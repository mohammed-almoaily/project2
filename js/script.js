var countDownDate = new Date("Oct 25, 2025 16:56:25").getTime();

var x = setInterval(function() {

    var now = new Date().getTime();

    var counter = document.getElementById("countdown");
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    counter.innerHTML = days + "يوم " + hours + "ساعة "
    + minutes + "دقيقة " + seconds + "ثانية ";

    if (distance < 0) {
        clearInterval(x);
        counter.innerHTML = "الوقت انتهى";
    }
}, 1000);
