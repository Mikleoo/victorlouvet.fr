let width = 0;
var css = document.createElement("style");
css.type = "text/css";

// Function used to modify the position of the page title to center it
function changeWidth(id) {

  // JavaScript function allowing to read information about an object when it changes size
  const taille = new ResizeObserver(function(entries) {
    // We retrieve the content of the information, particularly the width
    let rect = entries[0].contentRect;
    width = rect.width;
    // INJECT CSS
    css.innerHTML = "#"+ id +" { left: calc((100% - "+ width +"px)/ 2) }";
    document.body.appendChild(css);
  });

  taille.observe(document.getElementById(id));
}
