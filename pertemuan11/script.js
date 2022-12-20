let batu = document.getElementById('batu');
let gunting = document.getElementById('gunting');
let kertas = document.getElementById('kertas');
let computerChoice = document.getElementById('computerChoice');
let option = ["batu", "gunting", "kertas"]

batu.addEventListener('click', function () {
    let random = Math.floor(Math.random() * 3);
    let randomOption = option[random];
    computerChoice.innerHTML = randomOption.charAt(0).toUpperCase();
    setTimeout(() => {
        switch (randomOption) {
            case "batu":
                alert("Pertandingan Seri");
                break;
            case "gunting":
                alert("Kamu Menang!");
                break;
            default:
                alert("Komputer Menang!")
                break;
        }
    }, 300);
})
gunting.addEventListener('click', function () {
    let random = Math.floor(Math.random() * 3);
    let randomOption = option[random];
    computerChoice.innerHTML = randomOption;
    setTimeout(() => {
        switch (randomOption) {
        case "gunting":
            alert("Pertandingan Seri");
            break;
        case "kerta":
            alert("Kamu Menang!");
            break;
        default:
            alert("Komputer Menang!")
            break;
    }
    }, 300);
})

kertas.addEventListener('click', function () {
    let random = Math.floor(Math.random() * 3);
    let randomOption = option[random];
    computerChoice.innerHTML = randomOption;
    setTimeout(() => {
        switch (randomOption) {
        case "kertas":
            alert("Pertandingan Seri");
            break;
        case "batu":
            alert("Kamu Menang!");
            break;
        default:
            alert("Komputer Menang!")
            break;
    }
    }, 300);
})