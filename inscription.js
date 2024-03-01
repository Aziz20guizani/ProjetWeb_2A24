function validerDateOfBirth() {
    var dateUser = document.getElementById("date_naissance").value;
  
    var dateU = new Date(dateUser);
  
    var dateSystem = new Date();
  
    if (dateU > dateSystem) {
      alert("La date de naissance doit être antérieure à celle d'aujourd'hui");
    }
  }
  
function validerNom() {
    var nom = document.getElementById("nom").value;
    var msg = document.getElementById("msgNom");
    var pattern = /^[a-zA-Z]+$/;
  
    if (nom.match(pattern)) {
      msg.innerHTML = "Correct";
      msg.style.color = "green";
    } else {
      msg.innerHTML = "Veuillez entrer un nom valide (lettres uniquement)";
      msg.style.color = "red";
    }
  }
  
  function validerPrenom() {
    var prenom = document.getElementById("prenom").value;
    var msg = document.getElementById("msgPrenom");
    var pattern = /^[a-zA-Z]+$/;
  
    if (prenom.match(pattern)) {
      msg.innerHTML = "Correct";
      msg.style.color = "green";
    } else {
      msg.innerHTML = "Veuillez entrer un nom valide (lettres uniquement)";
      msg.style.color = "red";
    }
  }
  var emailU = document.getElementById("email");
emailU.addEventListener("keyup", function () {
  var msg = document.getElementById("msgEmail");
  if (emailU.value.includes("@esprit.tn")) {
    msg.innerHTML = "Correct";
    msg.style.color = "green";
  } else {
    msg.innerHTML = "Veuillez entrer un email se terminant avec @esprit.tn";
    msg.style.color = "red";
  }
});

function validerTel() {
  var numTel = document.getElementById("telephone").value;
  var msg = document.getElementById("msgTel");
  if (isNaN(numTel) || numTel.length != 8) {
    msg.innerHTML =
      "Veuillez entrer un numéro dont la longueur est supérieure à 8 ";
    msg.style.color = "red";
  } else {
    msg.innerHTML = "Correct";
    msg.style.color = "green";
  }
}

function validerPassword() {
  var p = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
  var pass = document.getElementById("password").value;
  var msg = document.getElementById("msgPassword");

  if (!pass.match(p)) {
    msg.innerHTML =
      "Le mot de passe doit contenir au moins 8 caractères, incluant au moins un chiffre, une lettre minuscule et une lettre majuscule.";
    msg.style.color = "red";
  } else {
    msg.innerHTML = "Correct";
    msg.style.color = "green";
  }
}

var formulaire = document.addEventListener("submit", function (e) {
  e.preventDefault();
  validerNom();
  validerPrenom();
  validerEmail();
  validerTel();
  validerPassword();
});
