//This script displays and closes the images of the "Triade" template
var lastImage;

onLoadWindow ([], ["icon-croix-image"], [showImage], ["plus-icone"], [showImage]);

function showImage (e) {

  var fondBlanc = document.getElementById('background-plus-image');

  // We want to take the parent element for take the second element of the parent element, so we use path for chrome and parentElement for firefox
  if (!!window.chrome) {
    var elemParent = e.path[1];
  } else {
    var elemParent = e.explicitOriginalTarget.parentElement;
  }

  var image = elemParent.getElementsByTagName('img')[1];
  var croix = document.getElementById('icon-croix-image');

  if (fondBlanc.style.display == "block") {
    croix.style.display = "none";
    lastImage.style.display = "none";
    fondBlanc.style.display = "none";
  } else {
    lastImage = image;
    fondBlanc.style.display = "block";
    image.style.display = "block";
    croix.style.display = "block";
  }
}
