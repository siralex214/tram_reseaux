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

// // INTERDIR LE COPIER-COLLER

// contextMenuCatch = {
//     ie: function(){
//         if( document.all ){
//             return false;
//         }
//     },
//     netscape: function(e){
//         if( document.layers || (document.getElementById && !document.all) ){
//             if( e.which == 2 || e.which == 3 ){
//                 return false;
//             }
//         }
//     }
// }
 
// if (document.layers) {
//     document.captureEvents(Event.mousedown);
//     document.onmousedown = contextMenuCatch.netscape;
// } else {
//     document.onmouseup = contextMenuCatch.netscape;
//     document.oncontextmenu = contextMenuCatch.ie;
// }
// document.oncontextmenu = new Function("return false");
// document.onselectstart = new Function("return false");
// GESTION DES GRAPHS

fetch("http://localhost/tram_reseaux/statistiques/stat_protocol.php")
    .then(response => response.json())
    .then(data => { 
        console.log(data);
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
        const ctx2 = document.getElementById('graph2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'polarArea',
            data: {
                labels: ['good', 'disabled'],
                datasets: [{
                    data: [data.good, data.disabled],
                    backgroundColor: [
                        '#af52b7a8',
                        '#569b2787',
                    ],
                    borderColor: [
                        '#af52b7a8',
                        '#569b2787',
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
        const ctx3 = document.getElementById('graph3').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['50046', '63440', '51062'],
                datasets: [{
                    data: [data.portdepart1, data.portdepart2,data.portdepart3],
                    backgroundColor: [
                        '#279b9973',
                        '#cf4b6073',
                        '#d5a26773',
                    ],
                    borderColor: [
                        'red',
                        'green',
                        'blue',
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
        const ctx4 = document.getElementById('graph4').getContext('2d');
        const myChart4 = new Chart(ctx4, {
            type: 'doughnut',
            data: {
                labels: ['3480', '443'],
                datasets: [{
                    data: [data.portarrive1, data.portarrive2],
                    backgroundColor: [
                        'red',
                        'green',
                    ],
                    borderColor: [
                        'red',
                        'green',
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


