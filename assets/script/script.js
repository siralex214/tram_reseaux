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
function showItem(entries){
    entries.forEach(entry => {
        if(entry.isIntersecting) { // Si les deux éléments ( parent et enfant) apparaissent, alors j'active la classe 'active'
            entry.target.children[0].classList.add('active');
        }
    })
}

qsnText.forEach(item=>{
    observer.observe(item);
})
qsnTextDeux.forEach(item=>{
    observer.observe(item);
})                          // La fonction s'active une fois que la détection des deux éléments a été faite avec le parent et l'enfant
imgText.forEach(item=>{
    observer.observe(item);
})
imgTextDeux.forEach(item=>{
    observer.observe(item);
})
 containerCard.forEach(item=>{
    observer.observe(item);
   
}) 


// CARD NOVA START


function scrollAppearNova() {
  
    let containerCard = document.querySelector('.js_card_qsn');
    let containerCardPosition = containerCard.getBoundingClientRect().top;
    //let langagesPosition = langages.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2 ;

    if(containerCardPosition < screenPosition) {
        
        containerCard.classList.add('intro-appear');
       
    } 

    //console.log(aboutPosition);

}
window.addEventListener('scroll', scrollAppearNova);


function scrollAppearLogo() {
  
    let containerCard = document.querySelector('.js_logo_qsn');
    let containerCardPosition = containerCard.getBoundingClientRect().top;
    //let langagesPosition = langages.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if(containerCardPosition < screenPosition) {
        
        containerCard.classList.add('intro-appear');
       
    } 

    //console.log(aboutPosition);

}
window.addEventListener('scroll', scrollAppearLogo);
// CARD NOVA END

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
window.addEventListener("DOMContentLoaded", (event) => { animate_text(); });

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
    ie: function(){
        if( document.all ){
            return false;
        }
    },
    netscape: function(e){
        if( document.layers || (document.getElementById && !document.all) ){
            if( e.which == 2 || e.which == 3 ){
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

fetch("../statistiques/stat_protocol.php")
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
