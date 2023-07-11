var compteurValue = 0;
const cartes = document.querySelectorAll('.carte');
let carteRetournee = false;
let premiereCarte, secondeCarte;
let verouillage = false;
let pairesValidees = 0;
  
function retourneCarte(){
    if(verouillage) return;

    this.childNodes[1].classList.toggle('active'); 

    if(!carteRetournee){
        carteRetournee = true;
        premiereCarte = this;
        return;
    }
    carteRetournee = false;
    secondeCarte = this;

    correspondance();
}

function correspondance(){
    if(premiereCarte.getAttribute('data-attr') === secondeCarte.getAttribute('data-attr')) {
        premiereCarte.removeEventListener('click', retourneCarte);
        secondeCarte.removeEventListener('click', retourneCarte);
        pairesValidees++;
    } 
    else {
        verouillage = true;
        setTimeout(() => {
            premiereCarte.childNodes[1].classList.remove('active');
            secondeCarte.childNodes[1].classList.remove('active');
            verouillage = false;
        }, 1000)
    }

    if (pairesValidees === cartes.length / 2) {
        bravo();
    }
}

function buttonClick() {
    compteurValue++; 
    document.getElementById("compteur").textContent = compteurValue; 
    document.querySelector("h2").innerHTML = "Nombre de coups : " + compteurValue;
}

cartes.forEach(carte => {
    carte.addEventListener('click', retourneCarte)
});

function aleatoire(){
    cartes.forEach(card => {
        let randomPosition = Math.floor(Math.random() * 12);
        card.style.order = randomPosition;
    })
}
aleatoire();

function bravo() {
    document.getElementById("paires").textContent = pairesValidees; 
    document.querySelector("h3").innerHTML = "Bravo ! Tu es génial ! 😄";
    
    // Déclencher les confettis
    confetti({
        particleCount: 100, // Nombre de confettis
        spread: 70, // Étalement horizontal des confettis
        origin: { y: 0.6 } // Position de départ des confettis (0.6 représente le haut de l'écran)
    });
}


