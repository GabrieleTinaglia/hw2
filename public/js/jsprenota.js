const datamin = document.getElementById("datamin");
date = new Date().toISOString().replace('-', '/').split('T')[0].replace('-', '/');
var valueData = document.getElementById("datamin");
var value;

function setValues(json) {
    let times = {};
    let days = {};
    var i = 0;
    var conta = 0;
    for (orari of json) {
        times[i] = json[i];

        i++;
    }

    for (i = 0; i < json.length; i++) {
        d = json[i].ora;
        if (document.getElementById("" + d).classList.contains("hidden")) {
            document.getElementById("" + d).classList.remove("hidden");
        }
    }
    for (k of json) {
        if (value == k.data) {
            for (i = 0; i < json.length; i++) {
                d = json[i].ora;
                if (value === json[i].data) {
                    d = json[i].ora;
                }

                for (p of json) {
                    conta = 0;
                    if (d === p.ora && value == json[i].data) {
                        conta++;

                    }
                    if (conta >= 1) {
                        document.getElementById("" + d).classList.add("hidden");
                    }
                }

            }
        }
    }

}

function response(event) {
    return event.json();
}
valueData.addEventListener("focusout", function(e) {
    value = valueData.value;
    fetch("/reserve").then(response).then(setValues);
})