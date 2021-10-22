// This script manages the display of the slider

// Screen size
var WidthWindow = window.innerWidth;
// Number of desired slide
var NombreSlideVoulu = 0;
// Target all slides
var Slide = document.getElementsByClassName('slide');
// Pagination index
var PageNumber = 0;

// When page load
document.addEventListener('DOMContentLoaded',function(){ showDivs(WidthWindow); });
// When page resize
window.addEventListener('resize',function() { resizeWindow(); });

// Function which updates the Width Window variable with the size of the current screen and calls showDivs with this new size
function resizeWindow(oEvent){
  var newWidth = window.innerWidth;
  if(WidthWindow == null || WidthWindow != newWidth){
    showDivs(newWidth);
    PageNumber = 0;
  }
  WidthWindow = newWidth;
}

// Function which determines the number of desired slides and the posters
function showDivs(WindowWidth) {

  // desired slide page
  var Index = PageNumber*NombreSlideVoulu;

  // Choose the number of slides according to the screen size
  if (WindowWidth > 1245) {
    NombreSlideVoulu = 4;
  }
  if (WindowWidth <= 1245 && WindowWidth > 700) {
    NombreSlideVoulu = 3;
  }
  if (WindowWidth <= 700 && WindowWidth >= 420) {
    NombreSlideVoulu = 2;
  }
  if (WindowWidth < 420) {
    NombreSlideVoulu = 1;
  }

  // We remove all the slides
  for (i = 0; i < Slide.length ; i++) {
    // We check that it exists to avoid errors (Too many Wanted compared to the number of slides)
    if (Slide[i]) {
      Slide[i].style.display = "none";
    }
  }

  // We display the desired number of slides
  for (i = 0; i < NombreSlideVoulu ; i++) {
    // We check that it exists to avoid errors (Too many Wanted compared to the number of slides)
    // We use + Index to display the correct page in relation to the number of slides
    if (Slide[i+Index]) {
      Slide[i+Index].style.display = "block";
    }
  }
}

function MoveSlide(indice) {
  // We update the page number
  PageNumber = PageNumber + indice;

  // If we want to go below the minimum page
  if (PageNumber < 0 || PageNumber*NombreSlideVoulu >= Slide.length) {
    PageNumber = PageNumber - indice;
    return;
  }

  showDivs(WidthWindow);
}
