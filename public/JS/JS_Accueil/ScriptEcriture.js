// Constructor of the TxtRotate object which initializes the variables:
// toRotate: An object containing all the String to rotate
// el: String, html element
// loopNum: Int, Number of rotation
// period: Int, The period of time that a rotation lasts in ms
// txt: String used to contain the displayed text
// tick: an empty initialize function to contain a function. A tick in javascript is an iteration of an event loop
// isDeleting: Boolean to know if we delete or if we display
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = period;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

// We initialize a function to update the text to display
// prototype: allows you to write a new property or methods to the constructor of the object. Here is the tick () function
TxtRotate.prototype.tick = function() {

  // We initialize the modulo between the number of loops and the size of the string to rotate. This will give us the number of the table to display
  var i = this.loopNum % this.toRotate.length;
  // We get the String to display
  var fullTxt = this.toRotate[i];

  // If we have to delete the String we return the String of character 0 to the size of txt - 1 to reduce the characters one by one
  // Otherwise we increase the number of characters little by little
  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  // We update our HTML element with the text to display
  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  // We copy the instance this
  var that = this;
  // We create a random number which will be used for the execution time before launching the tick () function
  var delta = this.period;

  // If we have to delete, we divide by 2 the time to delete the character string so that it is dynamic
  if (this.isDeleting) { delta /= 2; }

  // If we don't delete and the displayed text corresponds to the full text to display then we update the delta and say we must delete
  // Otherwise if we have to delete and there is no text we say that we should not delete anymore, we increment the loopNum and we update the delta
  if (!this.isDeleting && this.txt === fullTxt) {
    // Create a time for rest the String
    delta = 2000;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
  }

  // We call back the tick () function which is executed in a certain time (delta) in order to make it work indefinitely
  setTimeout(function() {
    that.tick();
  }, delta);
};

// Function which targets the HTML elements giving the array of String and the data
// We will then initialize our object with all the necessary elements
// Then inject css for the right border which simulates a text field
function ecriture() {
  var elements = document.getElementsByClassName('txt-rotate');
  // We loop for each element found
  for (var i=0; i<elements.length; i++) {
    // Our JSON character string
    var toRotate = elements[i].getAttribute('data-rotate');
    // Our posting period
    var period = elements[i].getAttribute('data-period');
    // If we have things to animate we use our TxtRotate object
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  // We inject the css to create the right bar and thus simulate the writing on a text field
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
