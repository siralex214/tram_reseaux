console.log("ok")
// TEXT SCROLL
let qsnText = [...document.querySelectorAll('.text_qsn')];
let qsnTextDeux = [...document.querySelectorAll('.text_qsn2')];
let imgText = [...document.querySelectorAll('.picture')];
let imgTextDeux = [...document.querySelectorAll('.picture2')];
let containerCard = [...document.querySelectorAll('.container_card_qsn')];


let options = {
    rootMargin: '0%', // l'animation s'activera au moment ou mon écran sera au centre de ma section
    threshold: 1.0 // la section entière devra être dans le champ de vision pour que l'animation s'active
}
let observer = new IntersectionObserver(showItem, options)
// Intersection Observer permet de détecter la visibilité d'un élément, ou la visibilité relative de deux éléments l'un par rapport à l'autre 
// ex : (parent et enfant) = .tex_qsn et span
//
function showItem(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) { // Si les deux éléments ( parent et enfant) apparaissent, alors j'active la classe 'active'
            entry.target.children[0].classList.add('active');
        }
    })
}

qsnText.forEach(item => {
    observer.observe(item);
})
qsnTextDeux.forEach(item => {
    observer.observe(item);
})                          // La fonction s'active une fois que la détection des deux éléments a été faite avec le parent et l'enfant
imgText.forEach(item => {
    observer.observe(item);
})
imgTextDeux.forEach(item => {
    observer.observe(item);
})
containerCard.forEach(item => {
    observer.observe(item);

})


// Système de pop up ouverture et fermeture
const button = document.querySelector("#button")
const button_label = document.querySelector("#button_label")
const fermeture_connexion = document.querySelector("#fermeture_connexion")

if (button_label != null) {
    button_label.addEventListener("click", () => {
        button.checked = true
    })
}

if (fermeture_connexion != null) {
    fermeture_connexion.addEventListener("click", () => {
        button.checked = false
    })
}

// système de rotation dans le pop-up
const vers_inscription = document.querySelectorAll(".vers_inscription")
const container = document.querySelector(".container_modal")
let etatReturnCard = false

if (vers_inscription != null) {
    vers_inscription.forEach(element => {
        element.addEventListener("click", () => {
            if (etatReturnCard == false) {
                container.style = "transform: rotateY(180deg);"
                etatReturnCard = true
            } else {
                container.style = "transform: rotateY(0deg);"
                etatReturnCard = false
            }
        })
    })
}

// TEXT LETTER BY LETTER

"use strict";
window.addEventListener("DOMContentLoaded", (event) => {
    animate_text();
});

function animate_text() {
    let delay = 100,
        delay_start = 0,
        contents,
        letters;
    document.querySelectorAll(".animate-text").forEach(function (elem) {
        contents = elem.textContent.trim();
        elem.textContent = "";
        letters = contents.split("");
        elem.style.visibility = 'visible';

        letters.forEach(function (letter, index_1) {
            setTimeout(function () {
                elem.textContent += letter;
            }, delay_start + delay * index_1);
        });
        delay_start += delay * letters.length;
    });
}

// INTERDIR LE COPIER-COLLER

contextMenuCatch = {
    ie: function () {
        if (document.all) {
            return false;
        }
    },
    netscape: function (e) {
        if (document.layers || (document.getElementById && !document.all)) {
            if (e.which == 2 || e.which == 3) {
                return false;
            }
        }
    }
}

if (document.layers) {
    document.captureEvents(Event.mousedown);
    document.onmousedown = contextMenuCatch.netscape;
} else {
    document.onmouseup = contextMenuCatch.netscape;
    document.oncontextmenu = contextMenuCatch.ie;
}
document.oncontextmenu = new Function("return false");
document.onselectstart = new Function("return false");
// GESTION DES GRAPHS

fetch("http://localhost/tram_reseaux/statistiques/stat_protocol.php")
    .then(response => response.json())
    .then(data => {
        const ctx = document.getElementById('graph1').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ['IMCP', 'TCP', 'TLS', 'UDP'],
                datasets: [{
                    label: '# of Votes',
                    data: [data.IMCP, data.TCP, data.TLS, data.UDP],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })


// Gestion des formulaires

//    Connexion

const email_connexion = document.querySelector("#email_connexion")
const password_connexion = document.querySelector("#password_connexion")
const erreur_mail_co = document.querySelector("#erreur_mail_co")
const erreur_password_co = document.querySelector("#erreur_password_co")
const submit_connexion = document.querySelector("#submit_connexion")
const error_connexion = document.querySelector("#error_connexion")
let erreur = false

function pause(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

if (email_connexion != null && password_connexion != null) {
    email_connexion.addEventListener("input", async () => {
        if (!email_connexion.value.match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i)) {
            erreur_mail_co.innerHTML = email_connexion.value + " n'est pas une adresse valide"
            email_connexion.style = "outline: red 3px solid"
            submit_connexion.style = "cursor: no-drop"
            erreur = true
        } else {
            submit_connexion.style = "cursor: pointer"
            erreur_mail_co.innerHTML = "&nbsp;"
            email_connexion.style = "outline: green 3px solid"
            erreur = false
        }
    })
    password_connexion.addEventListener("input", async () => {
        if (password_connexion.value.length < 4) {
            erreur_password_co.innerHTML = "mot de passe non réglementaire"
            password_connexion.style = "outline: red 3px solid"
            submit_connexion.style = "cursor: no-drop"
            erreur = true
        } else {
            erreur_password_co.innerHTML = "&nbsp;"
            password_connexion.style = "outline: green 3px solid"
            submit_connexion.style = "cursor: pointer"
            erreur = false


        }
    })
    submit_connexion.addEventListener("click", async (event) => {
        if (erreur == true) {
            event.preventDefault()
            error_connexion.style = "color: red"
            error_connexion.innerHTML = "Mot de passe ou email incorrect"

        } else {
            // event.preventDefault()
            error_connexion.style = "color: orange"
            error_connexion.innerHTML = "Vérification en cours <span class=\"throbber-loader\">Loading&#8230;</span>\n"
            await pause(5000)
            fetch("../../login/login.php")
                .then(resp => resp.json())
                .then(async data => {
                    console.log(data)
                    error_connexion.style = "color: green"
                    error_connexion.innerHTML = "connexion autorisé, redirection en cours"
                    await pause(2000)
                    button.checked = false
                    await pause(1000)
                    window.location.href = './user/accueil_user.php'


                })

        }
    })

}