const modifyButton = document.getElementById("insertDishes");
const reviewButton = document.getElementById("showReview");
const reservationButton = document.getElementById("showReservation");
const deleteButton = document.getElementById("delete");
const div1 = document.getElementById("contenitore");
const div2 = document.getElementById("reviews");
const div3 = document.getElementById("reservations");
const logout = document.getElementById("logout");
document.getElementById("due").style.top = "13%";
document.getElementById("tre").style.top = "22.3%";
document.getElementById("aggiungi").style.flexDirection = "column";
var nome;
const pswrr = document.querySelector("d");

modifyButton.addEventListener("mouseover", function(e) {

    setTimeout(function() {
        modifyButton.classList.add("activated");
    }, 700);
    setTimeout(function() {
        document.getElementById("quattro").classList.remove("hidden");
    }, 1500);
    setTimeout(function() {

        modifyButton.classList.remove("activated");
        modifyButton.classList.add("active");
        document.getElementById("quattro").classList.add("hidden");

    }, 2500);
}, false)
reviewButton.addEventListener("mouseover", function(e) {

    setTimeout(function() {
        reviewButton.classList.add("activated");
    }, 700);
    setTimeout(function() {
        document.getElementById("due").classList.remove("hidden");
    }, 1500);
    setTimeout(function() {

        reviewButton.classList.remove("activated");
        reviewButton.classList.add("active");
        document.getElementById("due").classList.add("hidden");

    }, 2500);
}, false)
reservationButton.addEventListener("mouseover", function(e) {

    setTimeout(function() {
        reservationButton.classList.add("activated");
    }, 700);
    setTimeout(function() {
        document.getElementById("tre").classList.remove("hidden");
    }, 1500);
    setTimeout(function() {

        reservationButton.classList.remove("activated");
        reservationButton.classList.add("active");
        document.getElementById("tre").classList.add("hidden");

    }, 2500);
}, false)
modifyButton.addEventListener("click", function(e) {
    logout.classList.add("active");
    div1.classList.remove("hidden");
    div2.classList.add("hidden");
    div3.classList.add("hidden");
})
reviewButton.addEventListener("click", function(e) {
    logout.classList.add("active");
    div1.classList.add("hidden");
    div2.classList.remove("hidden");
    div3.classList.add("hidden");

    function onReviews(json) {
        const lista = document.getElementById("reviews");
        lista.innerHTML = '';
        for (recensione of json) {
            const elem = document.createElement("span");
            const data = document.createElement("p");
            const note = document.createElement("p");
            const user = document.createElement("p");
            user.textContent = recensione.user;
            note.textContent = recensione.commento;
            data.textContent = recensione.data + "      " + recensione.orario;
            elem.appendChild(user);
            elem.appendChild(data);
            elem.appendChild(note);
            lista.appendChild(elem);


        }
    }

    function responseReviews(response) {
        return response.json();
    }
    fetch("/reviews/p").then(responseReviews).then(onReviews);

})
reservationButton.addEventListener("click", function(e) {
    div1.classList.add("hidden");
    div2.classList.add("hidden");
    div3.classList.remove("hidden");

    function onReservations(json) {

        const lista = document.getElementById("reservations");
        lista.innerHTML = '';
        for (prenotazione of json) {
            const elem = document.createElement("span");
            const user = document.createElement("p");
            const data = document.createElement("p");
            const npe = document.createElement("p");
            const note = document.createElement("p");
            const elimina = document.createElement("g");
            user.textContent = prenotazione.user;
            elimina.dataset.id_data = prenotazione.data;
            elimina.dataset.id_ora = prenotazione.ora;
            elimina.textContent = "Elimina";
            elimina.addEventListener("click", eliminaPrenotazione);
            note.textContent = "Note: " + prenotazione.note;
            data.textContent = prenotazione.data + "  " + prenotazione.ora;
            npe.textContent = "Numero persone: " + prenotazione.n_persone;
            elem.appendChild(user);
            elem.appendChild(data);
            elem.appendChild(npe);
            elem.appendChild(note);
            elem.appendChild(elimina);
            lista.appendChild(elem);

        }
    }

    function eliminaPrenotazione(e) {
        fetch("/elimina/" + e.currentTarget.dataset.id_data + "/" + e.currentTarget.dataset.id_ora).then(responseReservations).then(onReservations);
    }

    function responseReservations(response) {
        return response.json();
    }
    fetch("/getReservations").then(responseReservations).then(onReservations);


})

document.getElementById("logout").addEventListener("click", function(e) {
    fetch("/logout");
    window.location.replace("/home");
})