let cssFooter = document.createElement("style");
cssFooter.type = "text/css";

// Launch function for the page Accueil with onLoadWindow in OnLoad.js
// params : nameFonctionsStart, idsListener, nameFunctionsIdListener, classListener, nameFunctionsClassListener // All tabs
onLoadWindow ([], ["Container-icon-menu"], [closeFooter], ["footer-button"], [footer]);

function closeFooter() {

  const footerUp = document.getElementById("FooterUp"),
        containerIconeMenu = document.getElementById("Container-icon-menu");

  if (containerIconeMenu.getAttribute("status") == "open" && footerUp.getAttribute("status") == "open") {
    cssFooter.innerHTML = ".footer { transform: none; }";
    footerUp.textContent = "^";
    footerUp.setAttribute("status", "close");
  }

}

function footer() {

  const footerUp = document.getElementById("FooterUp"),
        footerDown = document.getElementById("FooterDown"),
        containerIconeMenu = document.getElementById("Container-icon-menu");

  // INJECT CSS
  if (containerIconeMenu.getAttribute("status") == "close") {
    if (footerUp.getAttribute("status") == "close") {
      cssFooter.innerHTML = ".footer { transform: translateY(-"+ footerDown.offsetHeight +"px); } .footer-dark { position : absolute;}";
      footerUp.textContent = "v";
      footerUp.setAttribute("status", "open");
    } else {
      cssFooter.innerHTML = ".footer { transform: none; }";
      footerUp.textContent = "^";
      footerUp.setAttribute("status", "close");
    }
    document.body.appendChild(cssFooter);
  }

}
