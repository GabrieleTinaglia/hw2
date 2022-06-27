const result = document.getElementById("result");
const forms = document.getElementById("form");
forms.addEventListener("submit", function(e) {
    const formData = new FormData(forms);
    var object = {};
    formData.forEach((value, key) => {
        object[key] = value;
    });
    var json = JSON.stringify(object);
    result.innerHTML = "Form Inviato!";

    fetch("https://api.web3forms.com/submit", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
            },
            body: json
        })
        .then(async(response) => {
            let json = await response.json();
        })
        .then(function() {
            form.reset();
            setTimeout(() => {
                result.style.display = "none";
            }, 5000);
        });
});