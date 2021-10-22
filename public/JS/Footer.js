var cssFooter = document.createElement("style");
cssFooter.type = "text/css";
var int = 0;

function Footer() {
  let footer = document.getElementsByClassName('footer-dark')[0],
      btn = document.getElementsByClassName('footer-button')[0];

  // INJECT CSS
  if (int % 2 === 0) {
    cssFooter.innerHTML = ".footer { transform: translateY(-"+ footer.offsetHeight +"px); } .footer-dark { position : absolute;}";
    btn.textContent = "v";
  } else {
    cssFooter.innerHTML = ".footer { transform: none; }";
    btn.textContent = "^";
  }
  document.body.appendChild(cssFooter);
  int += 1;
}
