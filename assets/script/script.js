const animText = document.querySelector(".animate-text")
// **** JAVASCRIPT PAGE QUI SOMMES-NOUS START **** //

// TEXT SCROLL
let qsnText = [...document.querySelectorAll(".text_qsn")];
let qsnTextDeux = [...document.querySelectorAll(".text_qsn2")];
let imgText = [...document.querySelectorAll(".picture")];
let imgTextDeux = [...document.querySelectorAll(".picture2")];
let containerCard = [...document.querySelectorAll(".container_card_qsn")];

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


// CARD NOVA START

function scrollAppearNova() {

    let containerCard = document.querySelector('.js_card_qsn');
    let containerCardPosition = containerCard.getBoundingClientRect().top;
    //let langagesPosition = langages.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if (containerCardPosition < screenPosition) {

        containerCard.classList.add('intro-appear');

    }

    //console.log(aboutPosition);

    //console.log(aboutPosition);
}
window.addEventListener("scroll", scrollAppearNova);

function scrollAppearLogo() {

    let containerCard = document.querySelector('.js_logo_qsn');
    let containerCardPosition = containerCard.getBoundingClientRect().top;
    //let langagesPosition = langages.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if (containerCardPosition < screenPosition) {

        containerCard.classList.add('intro-appear');

    }

    //console.log(aboutPosition);

    //console.log(aboutPosition);
}
window.addEventListener("scroll", scrollAppearLogo);
// CARD NOVA END

qsnText.forEach((item) => {
    observer.observe(item);
});
qsnTextDeux.forEach((item) => {
    observer.observe(item);
}); // La fonction s'active une fois que la détection des deux éléments a été faite avec le parent et l'enfant
imgText.forEach((item) => {
    observer.observe(item);
});
imgTextDeux.forEach((item) => {
    observer.observe(item);
});
containerCard.forEach((item) => {
    observer.observe(item);
});

// JAVASCRIPT CAROUSEL PAGE QUI SOMMES-NOUS START
let slides = document.querySelectorAll('.slide_qsn');
let btns = document.querySelectorAll('.btn_qsn');
let currentSlide = 1;

// Javascript for image slider MANUAL navigation START

let manualNav = function(manual) {
    slides.forEach((slide) => {
        slide.classList.remove('test');

        btns.forEach((btn) => {
            btn.classList.remove('test');
        });
    });
    slides[manual].classList.add('test');
    btns[manual].classList.add('test');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});

// Javascript for image slider manual navigation END

//// Javascript carousel END START

let repeat = function(activeClass) {
    let active = document.getElementsByClassName('test');
    let i = 1;

    let repeater = () => {
        setTimeout(function() {

            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('test');
            });
            slides[i].classList.add('test');
            btns[i].classList.add('test');
            i++;

            if(slides.length == i) {
                i = 0;
            }
            if(i >= slides.length) {
                return;
            }
            repeater();
        }, 3000);
    }
    repeater();
}
repeat();

// Javascript for image slider AUTO navigation END.


// Javascript carousel END

// DARK MODE START

const darkMode = document.getElementById('dark-mode');

darkMode.addEventListener('change', () => {
    document.body.classList.toggle('dark');
})

// DARK MODE END

// **** JAVASCRIPT PAGE QUI SOMMES-NOUS END **** //
// Système de pop up ouverture et fermeture
const button = document.querySelector("#button");
const button_label = document.querySelector("#button_label");
const fermeture_connexion = document.querySelector("#fermeture_connexion");

if (button_label != null) {
    button_label.addEventListener("click", () => {
        button.checked = true;
        animText.style = "transition: all 0.5s; display: none"
    });
}

if (fermeture_connexion != null) {
    fermeture_connexion.addEventListener("click", () => {
        animText.style = "transition: all 0.5s; display: block"
        button.checked = false;
    });
}

// système de rotation dans le pop-up
const vers_inscription = document.querySelectorAll(".vers_inscription");
const container = document.querySelector(".container_modal");
let etatReturnCard = false;

if (vers_inscription != null) {
    vers_inscription.forEach((element) => {
        element.addEventListener("click", () => {
            if (etatReturnCard == false) {
                container.style = "transform: rotateY(180deg);";
                etatReturnCard = true;
            } else {
                container.style = "transform: rotateY(0deg);";
                etatReturnCard = false;
            }
        });
    });
}

// TEXT LETTER BY LETTER

("use strict");

if (animText != null) {
    animate_text();
}

function animate_text() {
    let delay = 100,
        delay_start = 0,
        contents,
        letters;

    contents = animText.textContent.trim();
    animText.textContent = "";
    letters = contents.split("");

    letters.forEach(function (letter, index_1) {
        setTimeout(function () {
            animText.textContent += letter;
        }, delay_start + delay * index_1);
    });
    delay_start += delay * letters.length;

}

// CARROUSSEL DE TEMOIGNAGES

var el = document.querySelector('.icon-cards__content');
if (el != null) {
    // document.querySelector('#toggle-animation').addEventListener('click', classToggle); a voir avec tout le monde beug!!!!!!!!!!!
}

function classToggle() {
    el.classList.toggle('step-animation');
}


// GESTION DES GRAPHS

fetch("http://localhost/tram_reseaux/statistiques/stat_protocol.php")
    .then((response) => response.json())
    .then((data) => {
        let keys = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            keys.push(Object.keys(data)[index]);
        }
        console.log(keys);
        let value = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            console.log();
            value.push(data[keys[index]]);
        }
        const ctx = document.getElementById("graph1").getContext("2d");
        const myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: keys,
                datasets: [
                    {
                        data: value,
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                        ],
                        borderColor: [
                            "rgba(255, 99, 132, 1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                            "rgba(75, 192, 192, 1)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });

fetch("http://localhost/tram_reseaux/statistiques/protocol_check.php")
    .then((response) => response.json())
    .then((data) => {
        let keys = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            keys.push(Object.keys(data)[index]);
        }
        console.log(keys);
        let value = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            console.log();
            value.push(data[keys[index]]);
        }
        const ctx2 = document.getElementById("graph2").getContext("2d");
        const myChart2 = new Chart(ctx2, {
            type: "polarArea",
            data: {
                labels: keys,
                datasets: [
                    {
                        data: value,
                        backgroundColor: ["#af52b7a8", "#569b2787"],
                        borderColor: ["#af52b7a8", "#569b2787"],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
fetch("http://localhost/tram_reseaux/statistiques/protocol_depart.php")
    .then((response) => response.json())
    .then((data) => {
        let keys = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            keys.push(Object.keys(data)[index]);
        }
        console.log(keys);
        let value = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            console.log();
            value.push(data[keys[index]]);
        }
        const ctx3 = document.getElementById("graph3").getContext("2d");
        const myChart3 = new Chart(ctx3, {
            type: "line",
            data: {
                labels: keys,
                datasets: [
                    {
                        data: value,
                        backgroundColor: ["#279b9973", "#cf4b6073", "#d5a26773"],
                        borderColor: ["red", "green", "blue"],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
fetch("http://localhost/tram_reseaux/statistiques/protocol_arriver.php")
    .then((response) => response.json())
    .then((data) => {
        let keys = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            keys.push(Object.keys(data)[index]);
        }
        console.log(keys);
        let value = [];
        for (let index = 0; index < Object.keys(data).length; index++) {
            console.log();
            value.push(data[keys[index]]);
        }
        const ctx4 = document.getElementById("graph4").getContext("2d");
        const myChart4 = new Chart(ctx4, {
            type: "doughnut",
            data: {
                labels: keys,
                datasets: [
                    {
                        data: value,
                        backgroundColor: ["red", "green"],
                        borderColor: ["red", "green"],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
// Gestion des formulaires

//    Connexion

const email_connexion = document.querySelector("#email_connexion")
const focus_connexion_email = document.querySelector("#focus_connexion_email")
const focus_connexion_password = document.querySelector("#focus_connexion_password")
const password_connexion = document.querySelector("#password_connexion")
const erreur_mail_co = document.querySelector("#erreur_mail_co")
const erreur_password_co = document.querySelector("#erreur_password_co")
const submit_connexion = document.querySelector("#submit_connexion")
const error_connexion = document.querySelector("#error_connexion")
let erreur = true

function pause(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

if (email_connexion != null && password_connexion != null) {
    email_connexion.addEventListener("input", async () => {
        if (!email_connexion.value.match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i)) {
            erreur_mail_co.innerHTML = "l'email n'est pas une adresse valide"
            focus_connexion_email.style = "background-color: red"
            erreur = true
        } else {
            submit_connexion.style = "cursor: pointer"
            erreur_mail_co.innerHTML = "&nbsp;"
            focus_connexion_email.style = "background-color: green"
            erreur = false
        }
    })
    password_connexion.addEventListener("input", async () => {
        if (password_connexion.value.length < 8) {
            erreur_password_co.innerHTML = "mot de passe non réglementaire"
            focus_connexion_password.style = "background-color: red"
            erreur = true
        } else {
            focus_connexion_password.style = "background-color: green"
            erreur_password_co.innerHTML = "&nbsp;"
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
            event.preventDefault()
            error_connexion.style = "color: orange"
            error_connexion.innerHTML = "Vérification en cours <span class=\"throbber-loader\">Loading&#8230;</span>\n"
            await pause(2000)
            let formData = new FormData()
            formData.append("email", email_connexion.value)
            formData.append("password", password_connexion.value)
            formData.append("type", submit_connexion.value)
            fetch("http://localhost/PhpNeedForSchool/projet_reseau/login/login.php", {
                method: "POST",
                body: formData
            })
                .then(resp => resp.json())
                .then(async data => {
                    if (data == "true") {
                        error_connexion.style = "color: green"
                        error_connexion.innerHTML = "connexion autorisé, redirection en cours"
                        await pause(2000)
                        button.checked = false
                        await pause(1000)
                        window.location.href = './user/accueil_user.php'
                    } else if (data == "false") {
                        error_connexion.style = "color: red"
                        error_connexion.innerHTML = "Mot de passe ou email incorrect"
                    }
                })

        }
    })

}

const prenom_inscription = document.querySelector("#prenom_inscription")
const focus_prenom_inscription = document.querySelector("#focus_prenom_inscription")
const erreur_prenom_insc = document.querySelector("#erreur_prenom_inscription")

const submit_inscription = document.querySelector("#submit_inscription")
const error_inscription = document.querySelector("#error_inscription")

const email_inscription = document.querySelector("#email_inscription")
const focus_email_inscription = document.querySelector("#focus_email_inscription")
const erreur_mail_insc = document.querySelector("#erreur_mail_inscription")

const password_inscription = document.querySelector("#password_inscription")
const erreur_password_insc = document.querySelector("#erreur_password_inscription")
const focus_password_inscription = document.querySelector("#focus_password_inscription")

const nom_inscription = document.querySelector("#nom_inscription")
const erreur_nom_insc = document.querySelector("#erreur_nom_inscription")
const focus_nom_inscription = document.querySelector("#focus_nom_inscription")

const cgu_inscription = document.querySelector("#cgu_inscription")
const label_cgu = document.querySelector("#label_cgu")


let erreur_insc = true
let verifPrenomInsc = () => {
    if (prenom_inscription.value == "") {
        erreur_prenom_insc.innerHTML = "Veuillez remplir ce champ"
        focus_prenom_inscription.style = "background-color: red"
        erreur_insc = true
    } else {
        prenom_inscription.style = "outline: none"
        erreur_prenom_insc.innerHTML = "&nbsp;"
        focus_prenom_inscription.style = "background-color: green"
        erreur_insc = false
    }
    return erreur_insc
}
let verifNomInsc = () => {
    if (nom_inscription.value == "") {
        erreur_nom_insc.innerHTML = "Veuillez remplir ce champ"
        focus_nom_inscription.style = "background-color: red"
        erreur_insc = true

    } else {
        erreur_nom_insc.innerHTML = "&nbsp; "
        nom_inscription.style = "outline: none"
        focus_nom_inscription.style = "background-color: green"
        erreur_insc = false
        submit_inscription.style = "cursor: pointer"
    }
    return erreur_insc

}
let verifEmailInsc = () => {
    if (!email_inscription.value.match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i)) {
        erreur_mail_insc.innerHTML = "l'email n'est pas une adresse valide"
        focus_email_inscription.style = "background-color: red"
        erreur_insc = true
    } else {
        erreur_mail_insc.innerHTML = "&nbsp;"
        email_inscription.style = "outline: none"
        focus_email_inscription.style = "background-color: green"
        erreur_insc = false
        submit_inscription.style = "cursor: pointer"
    }
    return erreur_insc
}
let verifPasswordInsc = () => {
    if (password_inscription.value.length < 8) {
        erreur_password_insc.innerHTML = "Mot de passe non réglementaire"
        focus_password_inscription.style = "background-color: red"
        erreur_insc = true
    } else {
        focus_password_inscription.style = "background-color: green"
        erreur_password_insc.innerHTML = "&nbsp;"
        submit_inscription.style = "cursor: pointer"
        erreur_insc = false
    }
    return erreur_insc

}
let verifCgu = () => {
    if (cgu_inscription.checked == true) {
        label_cgu.style = "color: green"
        erreur_insc = false
    } else {
        label_cgu.style = "color: red"
        erreur_insc = true
    }
    return erreur_insc
}
if (submit_inscription != null) {
    prenom_inscription.addEventListener("input", verifPrenomInsc)
    nom_inscription.addEventListener("input", verifNomInsc)
    email_inscription.addEventListener("input", verifEmailInsc)
    password_inscription.addEventListener("input", verifPasswordInsc)
    cgu_inscription.addEventListener("change", verifCgu)
    submit_inscription.addEventListener("click", (event) => {
        verifPrenomInsc()
        verifNomInsc()
        verifEmailInsc()
        verifPasswordInsc()
        verifCgu()
        if (verifPrenomInsc() == true || verifNomInsc() == true || verifEmailInsc() == true || verifPasswordInsc() == true || verifCgu() == true) {
            erreur_insc = true
        } else {
            erreur_insc = false
        }

        event.preventDefault()
        if (erreur_insc == false) {
            error_inscription.innerHTML = " "
            let formData1 = new FormData()
            formData1.append("nom", nom_inscription.value)
            formData1.append("prenom", prenom_inscription.value)
            formData1.append("email", email_inscription.value)
            formData1.append("password", password_inscription.value)
            formData1.append("type", submit_inscription.value)
            formData1.append("cgu", cgu_inscription.checked)
            fetch("http://localhost/PhpNeedForSchool/projet_reseau/login/login.php", {
                method: "POST",
                body: formData1
            })
                .then(resp => resp.json())
                .then(data => {
                    if (data == "true") {
                        error_inscription.textContent = "Inscriptions terminé"
                        error_inscription.style = "color: green"
                        container.style = "transform: rotateY(0deg);";
                        etatReturnCard = false;
                    }
                    if (data.email != null) {
                        erreur_mail_insc.innerHTML = data.email
                    }
                })
        } else {
            error_inscription.style = "color: red"
            error_inscription.innerHTML = " veuillez remplir correctement le formulaire"
        }
    })


}
