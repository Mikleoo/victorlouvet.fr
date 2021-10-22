// Function which are executed when the page is loaded (see OnLoad.js) and which change the state of the like button if the "like" cookie exists
function ifLike () {
  document.getElementById("rond-coeur").addEventListener("click", clickJaime);
  var like = getCookie("like");
  if (like !== "") {
    document.getElementById('rond-coeur').style.background = '#bb2303';
    document.getElementById("rond-coeur").style.boxShadow = "0px 0px 0px 0px #e82c04";
    document.getElementById("rond-coeur").setAttribute("data-vote", "1");
  }
}

// Function executed when the like button is clicked.
// Whether the cookie exists or not :
// - Modify the style of the button
// - Change the data-vote attribute of the button
// - Modify the value of the number of likes on the front
// - Modify the value of the number of likes in the database
function clickJaime() {
  // Get the number of likes
  var valueNombreCoeur = document.getElementById('nombre-coeur').innerHTML;
  var like = getCookie("like");

  if (like !== "") {
    // If cookie exist
    setCookie('like', '1', 0);
    document.getElementById('rond-coeur').style.background = '#e82c04';
    document.getElementById("rond-coeur").style.boxShadow = "0px 0px 5px 1px #e82c04";
    document.getElementById("rond-coeur").setAttribute("data-vote", "0");
    valueNombreCoeur = parseInt(valueNombreCoeur) - 1;
    document.getElementById('nombre-coeur').innerHTML = valueNombreCoeur;
    // AJAX request to call the addLike.php file
    AjaxRequest('models/AddLike.php', 'POST', {
      'data-vote' : 0
    });
  } else {
    // If there are no cookie
    setCookie('like', '1', 365);
    document.getElementById('rond-coeur').style.background = '#bb2303';
    document.getElementById("rond-coeur").style.boxShadow = "0px 0px 0px 0px #e82c04";
    document.getElementById("rond-coeur").setAttribute("data-vote", "1");
    valueNombreCoeur = parseInt(valueNombreCoeur) + 1;
    document.getElementById('nombre-coeur').innerHTML = valueNombreCoeur;
    // AJAX request to call the addLike.php file
    AjaxRequest('models/AddLike.php', 'POST', {
      'data-vote' : 1
    });
  }
}

// Function which creates a "like" cookie with a value of 1
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  // Configure the expiration date: current date + x days
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Function which searches for the existence of a cookie by his name
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    // If there is a space at the start of the name, remove them
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    // If the name of the cookie appears first, then we return the value of the cookie
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
