// Validation script for the "Secret" form
// e.preventDefault(); -> Stop "action="file.php""

window.onload = function() {
  let envoi = document.getElementById('button-form');
  envoi.addEventListener('click', validate);
}

function validate(e) {

  var sheet = window.document.styleSheets[0];

  let email = document.getElementById("input_email").value;
  let pseudo = document.getElementById("input_pseudo").value;
  let conseil = document.getElementById("input_conseil").value;
  let manga = document.getElementById("manga").checked;
  let cuisine = document.getElementById("cuisine").checked;

  var error = document.getElementsByClassName("erreur-form");

  error[0].innerHTML = "";

  if (email.trim() !== "") {
    if (!isEmail(email)) {

      error[0].textContent += "Le mail est mauvais - ";
      sheet.insertRule("#input_email { border: solid 1px red; }", sheet.cssRules.length);
      e.preventDefault();

    } else {
      sheet.insertRule("#input_email { border: solid 1px #81c784; }", sheet.cssRules.length);
    }
  }

  if (pseudo.trim() == "") {

    error[0].textContent += "Le pseudo est vide - ";
    sheet.insertRule("#input_pseudo { border: solid 1px red; }", sheet.cssRules.length);
    e.preventDefault();

  } else {
    sheet.insertRule("#input_pseudo { border: solid 1px #81c784; }", sheet.cssRules.length);
  }
  if (conseil.trim() == "") {

    error[0].textContent += "Le conseil est vide - ";
    sheet.insertRule("#input_conseil { border: solid 1px red; }", sheet.cssRules.length);
    e.preventDefault();

  } else {
    sheet.insertRule("#input_conseil { border: solid 1px #81c784; }", sheet.cssRules.length);
  }
  if (manga === false && cuisine === false) {

    error[0].textContent += "La passion n'est pas sélectionné - ";
    e.preventDefault();

  }

}

function isEmail(email) {
  // La 1ère étape consiste à définir l'expression régulière d'une adresse email
  var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$', 'i');

  return regEmail.test(email);
}
