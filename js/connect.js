 const formulaire = document.querySelector(".me_connecter");
 console.log(formulaire);
const add_event = document.querySelector(".add_event");
console.log(add_event);
 const registration = document.querySelector(".nouveau_client"); 
 console.log(registration);
 const create_compte = document.querySelector(".create_compte");
 console.log(create_compte);

 function showContent() {
     formulaire.style.visibility = "hidden";
     registration.style.visibility = "hidden";
     create_compte.style.visibility = "visible";
 
 }

 add_event.addEventListener('click', function() { showContent()});