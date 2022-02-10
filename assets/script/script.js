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