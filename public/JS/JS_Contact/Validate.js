// Validation script for the "Contact" form
// e.preventDefault(); -> Stop "action="file.php""

window.onload = function() {
  let envoi = document.getElementById('btn-envoi');
  envoi.addEventListener('click', validate);
}

// Function that will validate the form by checking their information
// e is a pointer of the event
function validate(e) {

  var sheet = window.document.styleSheets[0];

  let nom = document.getElementById("name").value;
  let entreprise = document.getElementById("company").value;
  let email = document.getElementById("email").value;
  let sujet = document.getElementById("sujet").value;
  let msg = document.getElementById("message").value;

  var error = document.getElementsByClassName("erreur-form");

  error[0].innerHTML = "";

  // We check that the fields are not empty by removing the empty (trim)
  // We use e.preventDefault() to cancel the request to the php file
  if (nom.trim() == "") {

    error[0].textContent += "Le nom est vide - ";
    sheet.insertRule("#name { border: solid 1px red; }", sheet.cssRules.length);
    e.preventDefault();

  } else {
    sheet.insertRule("#name { border: solid 1px #81c784; }", sheet.cssRules.length);
  }
  if (email.trim() == "" || !isEmail(email)) {

    error[0].textContent += "Le mail est vide - ";
    sheet.insertRule("#email { border: solid 1px red; }", sheet.cssRules.length);
    e.preventDefault();

  } else {
    sheet.insertRule("#email { border: solid 1px #81c784; }", sheet.cssRules.length);
  }
  if (sujet.trim() == "") {

    error[0].textContent += "Le sujet est vide - ";
    sheet.insertRule("#sujet { border: solid 1px red; }", sheet.cssRules.length);
    e.preventDefault();

  } else {
    sheet.insertRule("#sujet { border: solid 1px #81c784; }", sheet.cssRules.length);
  }
  if (msg.trim() == "") {

    error[0].textContent += "Le message est vide";
    sheet.insertRule("#message { border: solid 1px red; }", sheet.cssRules.length);
    e.preventDefault();

  } else {
    sheet.insertRule("#message { border: solid 1px #81c784; }", sheet.cssRules.length);
  }

}

// Function which checks the validity of an email
function isEmail(email) {
  // The regular expression of an email address
  var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$', 'i');

  return regEmail.test(email);
}
