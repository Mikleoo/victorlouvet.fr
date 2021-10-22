// Function wich displays or not the title when triangle clicked
function turn() {
  let triangle = document.getElementById("Triangle-menu");
  let txt = document.getElementById("Titre-page");
  if (triangle.getAttribute("status") == "open") {
    triangle.style.transform = "rotate(180deg)";
    txt.style.display="none";
    triangle.setAttribute("status", "close");
  } else {
    triangle.style.transform = "rotate(0deg)";
    txt.style.display="block";
    triangle.setAttribute("status", "open");
  }
}

// Function which displays or not the menu
function openForm() {
  if (document.getElementById("Container-icon-menu").getAttribute("status") == "close") {
    document.getElementById("Container-icon-menu").setAttribute("status", "open");
    document.getElementById("Container-icon-menu").innerHTML = '<img id="Icon-menu" src="public/SVG/menu-croix.svg" alt="menu croix">';
    document.getElementById("Container-menu-data").style.display="block";
    if(document.getElementById("Titre-page").textContent == "Compétences") {
      document.getElementById("Grid-item-3").style.boxShadow = "0px 0px 5px 5px #709EE3";
    } else if(document.getElementById("Titre-page").textContent == "Expériences") {
      document.getElementById("Grid-item-6").style.boxShadow = "0px 0px 5px 5px #709EE3";
    } else if(document.getElementById("Titre-page").textContent == "Projets") {
      document.getElementById("Grid-item-9").style.boxShadow = "0px 0px 5px 5px #709EE3";
    } else if(document.getElementById("Titre-page").textContent == "Culture-Japonaise") {
      document.getElementById("Grid-item-8").style.boxShadow = "0px 0px 5px 5px #FFDC83";
    } else if(document.getElementById("Titre-page").textContent == "Manga-Anime") {
      document.getElementById("Grid-item-7").style.boxShadow = "0px 0px 5px 5px #FFDC83";
    } else if(document.getElementById("Titre-page").textContent == "Cuisine") {
      document.getElementById("Grid-item-4").style.boxShadow = "0px 0px 5px 5px #FFDC83";
    } else if(document.getElementById("Titre-page").textContent == "Contact") {
      document.getElementById("Grid-item-1").style.boxShadow = "0px 0px 5px 5px #C7FFD0";
    } else if(document.getElementById("Titre-page").textContent == "Secret") {
      document.getElementById("Grid-item-5").style.boxShadow = "0px 0px 5px 5px black";
    } else if(document.getElementById("Titre-page").textContent == "Accueil") {
      document.getElementById("Grid-item-2").style.boxShadow = "0px 0px 5px 5px #FFF496";
    } else {
      console.log("error on openForm() with boxShadow");
    }

  } else {
    document.getElementById("Container-icon-menu").setAttribute("status", "close");
    document.getElementById("Container-icon-menu").innerHTML = '<img id="Icon-menu" src="public/SVG/menu-carre.svg" alt="menu carre">';
    document.getElementById("Container-menu-data").style.display="none";
  }
}
