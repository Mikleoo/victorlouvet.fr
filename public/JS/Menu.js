// Launch Listeners
onLoadWindow ([], ["Container-icon-menu", "Container-icon-question", "Triangle-menu"], [mainMenu, displayInfo, titleTriangle]);

/* Full Functions */
function displayInfo() {
  alert('Ce site web à été concu pour montrer mes compétences web technique. Le plus interessant reste le code derriere le site disponible sur mon github "Mikleoo"');
}

// Function wich displays or not the title when triangle clicked
function titleTriangle() {

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
function mainMenu() {

  var containerIconeMenu = document.getElementById("Container-icon-menu");
  var iconeMenu = document.getElementById("Icon-menu");
  var titrePage = document.getElementById("Titre-page");
  var containerMenuData = document.getElementById("Container-menu-data");

  let fondFlou = document.getElementById("Fond-flou");

  if (titrePage.textContent == "Accueil") {
    fondFlou.style.display = "none";
  }

  if (containerIconeMenu.getAttribute("status") == "close") {

    containerIconeMenu.setAttribute("status", "open");
    iconeMenu.setAttribute("src", "public/SVG/menu-croix.svg");
    //containerIconeMenu.innerHTML = '<img class="icone" id="Icon-menu" src="public/SVG/menu-croix.svg" alt="Icone croix du menu">';
    containerMenuData.style.display="block";

    if(titrePage.textContent == "Compétences") {
      document.getElementById("Grid-item-3").style.boxShadow = "0px 0px 5px 5px #709EE3";
    } else if(titrePage.textContent == "Expériences") {
      document.getElementById("Grid-item-6").style.boxShadow = "0px 0px 5px 5px #709EE3";
    } else if(titrePage.textContent == "Projets") {
      document.getElementById("Grid-item-9").style.boxShadow = "0px 0px 5px 5px #709EE3";
    } else if(titrePage.textContent == "Culture-Japonaise") {
      document.getElementById("Grid-item-8").style.boxShadow = "0px 0px 5px 5px #FFDC83";
    } else if(titrePage.textContent == "Manga-Anime") {
      document.getElementById("Grid-item-7").style.boxShadow = "0px 0px 5px 5px #FFDC83";
    } else if(titrePage.textContent == "Cuisine") {
      document.getElementById("Grid-item-4").style.boxShadow = "0px 0px 5px 5px #FFDC83";
    } else if(titrePage.textContent == "Contact") {
      document.getElementById("Grid-item-1").style.boxShadow = "0px 0px 5px 5px #C7FFD0";
    } else if(titrePage.textContent == "Secret") {
      document.getElementById("Grid-item-5").style.boxShadow = "0px 0px 5px 5px black";
    } else if(titrePage.textContent == "Accueil") {
      document.getElementById("Grid-item-2").style.boxShadow = "0px 0px 5px 5px #FFF496";
    } else {
      console.log("error on openForm() with boxShadow");
    }

  } else {
    containerIconeMenu.setAttribute("status", "close");
    iconeMenu.setAttribute("src", "public/SVG/menu-carre.svg");
    //containerIconeMenu.innerHTML = '<img class="icone" id="Icon-menu" src="public/SVG/menu-carre.svg" alt="Icone du menu carre">';
    containerMenuData.style.display="none";
  }

}
