const conta = document.getElementById("countdown");
let seconds = 6;

function ContoRovescio() {
    if (seconds == 1) {
        console.log("ciao");
        window.location.replace("home");
    }
    seconds = seconds - 1;
    conta.textContent = seconds;

}
let scorre = (setInterval(ContoRovescio, 1000));