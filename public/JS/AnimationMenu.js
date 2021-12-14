let dataPositionCarre = new Array(),
    dataPositionCercle = new Array(),
    dataPositionTriangle = new Array();

let percentageMissing;
let add;
let newPosition;

// Launch function for the page Accueil with onLoadWindow in OnLoad.js
// params : nameFonctionsStart, idsListener, nameFunctionsIdListener, classListener, nameFunctionsClassListener // All tabs
onLoadWindow ([getPercentage], ["Icon-menu"], [setTime], [], []);

function setTime() {

  let containerIconeMenu = document.getElementById("Container-icon-menu");

  if (containerIconeMenu.getAttribute("status") == "close") {
    document.getElementById("Titre-principal").style.opacity = "0";
  } else if (containerIconeMenu.getAttribute("status") == "open") {
    document.getElementById("Titre-principal").style.opacity = "1";
  }

  let start = Date.now(); // remember start time

  let timer = setInterval(function() {

    // how much time passed from the start ?
    let timePassed = Date.now() - start;
    if (timePassed >= 1000) {
      clearInterval(timer); // finish the animation after 1 seconds
      return;
    }

    // draw the animation at the moment timePassed
    if (containerIconeMenu.getAttribute("status") == "close") {
      moveBackground(timePassed, "close");
    } else if (containerIconeMenu.getAttribute("status") == "open") {
      moveBackground(timePassed, "open");
    }

  }, 20);

}

// timePassed goes from 0 to 1000
// Change all css 49 times in 1000 ms for the animation of movement
function moveBackground(timePassed, order) {

  for (i = 0 ; i < dataPositionCercle.length ; i++) {

    // Move squares
    if (dataPositionCarre[i]) {

      let itemsSquare = JSON.parse(localStorage.getItem('dataPositionCarreStart'));
      let idDataPositionCarre = document.getElementById(dataPositionCarre[i].id);

      if (dataPositionCarre[i].moveDirection == "left") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionCarre[i].right;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionCarre[i].right + add;
          if (newPosition <= 98) {
            idDataPositionCarre.style.right = newPosition + '%';
            idDataPositionCarre.style.left = 'unset';
            dataPositionCarre[i].right = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionCarre[i].right - itemsSquare[i].right) / (timePassed / 50);
          newPosition = dataPositionCarre[i].right - percentageMissing;
          idDataPositionCarre.style.right = newPosition + '%';
          dataPositionCarre[i].right = newPosition;
        }


      } else if (dataPositionCarre[i].moveDirection == "right") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionCarre[i].left;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionCarre[i].left + add;
          if (newPosition <= 98) {
            idDataPositionCarre.style.left = newPosition + '%';
            idDataPositionCarre.style.right = 'unset';
            dataPositionCarre[i].left = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionCarre[i].left - itemsSquare[i].left) / (timePassed / 50);
          newPosition = dataPositionCarre[i].left - percentageMissing;
          idDataPositionCarre.style.left = newPosition + '%';
          dataPositionCarre[i].left = newPosition;
        }

      } else if (dataPositionCarre[i].moveDirection == "bottom") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionCarre[i].top;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionCarre[i].top + add;
          if (newPosition <= 98) {
            idDataPositionCarre.style.top = newPosition + '%';
            dataPositionCarre[i].top = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionCarre[i].top - itemsSquare[i].top) / (timePassed / 50);
          newPosition = dataPositionCarre[i].top - percentageMissing;
          idDataPositionCarre.style.top = newPosition + '%';
          dataPositionCarre[i].top = newPosition;
        }

      }
    }

    // Move cercles
    if (dataPositionCercle[i]) {

      let itemsCercle = JSON.parse(localStorage.getItem('dataPositionCercleStart'));
      let idDataPositionCercle = document.getElementById(dataPositionCercle[i].id);

      if (dataPositionCercle[i].moveDirection == "right") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionCercle[i].left;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionCercle[i].left + add;
          if (newPosition <= 97) {
            idDataPositionCercle.style.left = newPosition + '%';
            idDataPositionCercle.style.right = 'unset';
            dataPositionCercle[i].right = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionCercle[i].left - itemsCercle[i].left) / (timePassed / 50);
          newPosition = dataPositionCercle[i].left - percentageMissing;
          idDataPositionCercle.style.left = newPosition + '%';
          dataPositionCercle[i].left = newPosition;
        }

      } else if (dataPositionCercle[i].moveDirection == "top") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionCercle[i].bottom;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionCercle[i].bottom + add;
          if (newPosition <= 97) {
            idDataPositionCercle.style.bottom = newPosition + '%';
            idDataPositionCercle.style.top = 'unset';
            dataPositionCercle[i].bottom = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionCercle[i].bottom - itemsCercle[i].bottom) / (timePassed / 50);
          newPosition = dataPositionCercle[i].bottom - percentageMissing;
          idDataPositionCercle.style.bottom = newPosition + '%';
          dataPositionCercle[i].bottom = newPosition;
        }

      } else if (dataPositionCercle[i].moveDirection == "bottom") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionCercle[i].top;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionCercle[i].top + add;
          if (newPosition <= 97) {
            idDataPositionCercle.style.top = newPosition + '%';
            idDataPositionCercle.style.bottom = 'unset';
            dataPositionCercle[i].top = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionCercle[i].top - itemsCercle[i].top) / (timePassed / 50);
          newPosition = dataPositionCercle[i].top - percentageMissing;
          idDataPositionCercle.style.top = newPosition + '%';
          dataPositionCercle[i].top = newPosition;
        }

      }
    }

    // Move triangles
    if (dataPositionTriangle[i]) {

      let itemsTriangle = JSON.parse(localStorage.getItem('dataPositionTriangleStart'));
      let idDataPositionTriangle = document.getElementById(dataPositionTriangle[i].id);

      if (dataPositionTriangle[i].moveDirection == "left") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionTriangle[i].right;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionTriangle[i].right + add;
          if (newPosition <= 97) {
            idDataPositionTriangle.style.right = newPosition + '%';
            idDataPositionTriangle.style.left = 'unset';
            dataPositionTriangle[i].right = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionTriangle[i].right - itemsTriangle[i].right) / (timePassed / 50);
          newPosition = dataPositionTriangle[i].right - percentageMissing;
          idDataPositionTriangle.style.right = newPosition + '%';
          dataPositionTriangle[i].right = newPosition;
        }

      } else if (dataPositionTriangle[i].moveDirection == "right") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionTriangle[i].left;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionTriangle[i].left + add;
          if (newPosition <= 97) {
            idDataPositionTriangle.style.left = newPosition + '%';
            idDataPositionTriangle.style.right = 'unset';
            dataPositionTriangle[i].left = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionTriangle[i].left - itemsTriangle[i].left) / (timePassed / 50);
          newPosition = dataPositionTriangle[i].left - percentageMissing;
          idDataPositionTriangle.style.left = newPosition + '%';
          dataPositionTriangle[i].left = newPosition;
        }

      } else if (dataPositionTriangle[i].moveDirection == "top") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionTriangle[i].bottom;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionTriangle[i].bottom + add;
          if (newPosition <= 97) {
            idDataPositionTriangle.style.bottom = newPosition + '%';
            idDataPositionTriangle.style.top = 'unset';
            dataPositionTriangle[i].bottom = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionTriangle[i].bottom - itemsTriangle[i].bottom) / (timePassed / 50);
          newPosition = dataPositionTriangle[i].bottom - percentageMissing;
          idDataPositionTriangle.style.bottom = newPosition + '%';
          dataPositionTriangle[i].bottom = newPosition;
        }

      } else if (dataPositionTriangle[i].moveDirection == "bottom") {

        if (order == "open") {
          percentageMissing = 100 - dataPositionTriangle[i].top;
          add = percentageMissing / ( timePassed / 8 );
          newPosition = dataPositionTriangle[i].top + add;
          if (newPosition <= 97) {
            idDataPositionTriangle.style.top = newPosition + '%';
            idDataPositionTriangle.style.bottom = 'unset';
            dataPositionTriangle[i].top = newPosition;
          }
        } else if (order == "close") {
          percentageMissing = (dataPositionTriangle[i].top - itemsTriangle[i].top) / (timePassed / 50);
          newPosition = dataPositionTriangle[i].top - percentageMissing;
          idDataPositionTriangle.style.top = newPosition + '%';
          dataPositionTriangle[i].top = newPosition;
        }

      }
    }

  }

}

// This function create beautiful tab of all coordinates and direction move for all elements class give
function getPercentage() {

  // Class of html elements wanting to have their coordinates and direction of movement
  let listClassName = ["carre", "cercle", "triangle"];

  let websiteWidth = window.innerWidth;
  let websiteHeight = window.innerHeight;

  let percentageLeft, percentageRight, percentageTop, percentageBottom;
  let leftValue, rightValue, topValue, bottomValue;
  let idElement;

  let tempObjetDirection, tempObjectCoordinates;

  for (a = 0 ; a < listClassName.length ; a++ ) {

    let squareElements = document.getElementsByClassName(listClassName[a]);

    for (i = 0 ; i < squareElements.length ; i++) {

      idElement = squareElements[i].id

      // Get Style of element getStyle(elem, nameOfValueCss), return "number.number px"
      leftValue = getStyle(squareElements[i], "left");
      rightValue = getStyle(squareElements[i], "right");
      topValue = getStyle(squareElements[i], "top");
      bottomValue = getStyle(squareElements[i], "bottom");
      //console.log("left: " + leftValue + " right: " + rightValue + " top: " + topValue + " bottom: " + bottomValue);

      // Transform into an integer
      leftValue = parseInt(Math.round(leftValue.replace("px", "")));
      rightValue = parseInt(Math.round(rightValue.replace("px", "")));
      topValue = parseInt(Math.round(topValue.replace("px", "")));
      bottomValue = parseInt(Math.round(bottomValue.replace("px", "")));
      //console.log("left int: " + leftValue + " right int: " + rightValue + " top int: " + topValue + " left int: " + bottomValue);

      // Calcul the percentage of the css value for adaptative view
      percentageLeft = parseInt(Math.round(leftValue * 100 / websiteWidth));
      percentageRight = parseInt(Math.round(rightValue * 100 / websiteWidth));
      percentageTop = parseInt(Math.round(topValue * 100 / websiteHeight));
      percentageBottom = parseInt(Math.round(bottomValue * 100 / websiteHeight));
      //console.log("Poucentage left "+ (i + 1) +" : " + percentageLeft + "%" + " Poucentage right "+ (i + 1) +" : " + percentageRight + "%" + " Poucentage top "+ (i + 1) +" : " + percentageTop + "%" + " Poucentage bottom "+ (i + 1) +" : " + percentageBottom + "%");

      // Save coordinates in a temporary object
      tempObjectCoordinates = {
        left : percentageLeft,
        right : percentageRight,
        top : percentageTop,
        bottom : percentageBottom,
        id : idElement
      };

      // Choose direction in terms of the position of element and his type
      if (percentageLeft < 50 && listClassName[a] == "carre") {
        tempObjetDirection = {
          moveDirection : "left"
        };
      } else if (percentageLeft > 50 && listClassName[a] == "carre") {
        tempObjetDirection = {
          moveDirection : "right"
        };
      } else if (percentageTop > 50 && listClassName[a] == "cercle") {
        tempObjetDirection = {
          moveDirection : "bottom"
        };
      } else if (percentageTop < 50 && listClassName[a] == "cercle") {
        tempObjetDirection = {
          moveDirection : "top"
        };
      } else if (percentageLeft < 50 && percentageTop < 50 && listClassName[a] == "triangle") {
        tempObjetDirection = {
          moveDirection : "top"
        };
      } else if (percentageLeft < 50 && percentageTop > 50 && listClassName[a] == "triangle") {
        tempObjetDirection = {
          moveDirection : "left"
        };
      } else if (percentageLeft > 50 && percentageTop < 50 && listClassName[a] == "triangle") {
        tempObjetDirection = {
          moveDirection : "right"
        };
      } else if (percentageLeft > 50 && percentageTop > 50 && listClassName[a] == "triangle") {
        tempObjetDirection = {
          moveDirection : "bottom"
        };
      } else if (listClassName[a] == "carre") {
        tempObjetDirection = {
          moveDirection : "bottom"
        };
      } else if (listClassName[a] == "cercle") {
        tempObjetDirection = {
          moveDirection : "right"
        };
      } else if (listClassName[a] == "triangle") {
        tempObjetDirection = {
          moveDirection : "top"
        };
      }

      // Merge the two temporary object for the object array containing all the information
      if (listClassName[a] == "carre") {
        dataPositionCarre[i] = Object.assign(tempObjectCoordinates, tempObjetDirection);
      } else if (listClassName[a] == "cercle") {
        dataPositionCercle[i] = Object.assign(tempObjectCoordinates, tempObjetDirection);
      } else if (listClassName[a] == "triangle") {
        dataPositionTriangle[i] = Object.assign(tempObjectCoordinates, tempObjetDirection);
      }

      //console.log("--------------------------------------------");

    }

  }

  // Save start value for set to start elements
  localStorage.setItem('dataPositionCarreStart', JSON.stringify(dataPositionCarre));
  localStorage.setItem('dataPositionCercleStart', JSON.stringify(dataPositionCercle));
  localStorage.setItem('dataPositionTriangleStart', JSON.stringify(dataPositionTriangle));

}


// Get this function at https://stackoverflow.com/questions/395341/get-element-stylesheet-style-in-javascript
// Get style CSS of an element and his attribute name
function getStyle(elem, name) {
  // J/S Pro Techniques p136
  if (elem.style[name]) {
    return elem.style[name];
  } else if (elem.currentStyle) {
    return elem.currentStyle[name];
  } else if (document.defaultView && document.defaultView.getComputedStyle) {
    name = name.replace(/([A-Z])/g, "-$1");
    name = name.toLowerCase();
    s = document.defaultView.getComputedStyle(elem, "");
    return s && s.getPropertyValue(name);
  } else {
    return null;
  }
}
