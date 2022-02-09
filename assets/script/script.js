console.log("ok");

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
const container = document.querySelector(".container")
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