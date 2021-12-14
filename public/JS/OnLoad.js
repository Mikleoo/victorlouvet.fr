// This function add or create functions for the window.onload html
function addLoadEvent(func) {
  // Get the onload event
  var oldonload = window.onload;

  // If the event is not of type function then I add the generic function corresponding to the addition of the literners in the second function
  // Otherwise I add a new function with the existing one
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }

}

// This function add specifically functions and listeners
function onLoadWindow (nameFonctionsStart, idsListener, nameFunctionsIdListener, classListener = [], nameFunctionsClassListener) {

  // Fonctions names add
  for (i=0 ; i < nameFonctionsStart.length ; i++) {
    addLoadEvent(nameFonctionsStart[i]);
  }

  // Listeners add
  addLoadEvent(function() {
    for (i=0 ; i < idsListener.length ; i++) {
      document.getElementById(idsListener[i]).addEventListener("click", nameFunctionsIdListener[i]);
    }

    for (i=0 ; i < classListener.length ; i++) {
      var element = document.getElementsByClassName(classListener[i])
      for (var a = 0; a < element.length ; a++) {
        element[a].addEventListener("click", nameFunctionsClassListener[i]);
      }
    }
  });
}

/*
// Exemple d'utilisation
addLoadEvent(function() {
    document.body.style.backgroundColor = ‘#EFDF95’;
})
*/
