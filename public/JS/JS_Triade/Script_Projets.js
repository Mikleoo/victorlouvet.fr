//This script modifies the html of the "Triade" template to add <a> links to github projects

onLoadWindow ([addLinks], [], [], [], []);

function addLinks () {
  var htmlIcone = document.getElementsByClassName('plus-icone');
  var paretnHtmlIcone = document.getElementsByClassName('container-plus-image');
  var tabUrl = ['https://github.com/Mikleoo/victorlouvet.fr/tree/master', 'https://github.com/Mikleoo/GameFrogNFlies', 'https://github.com/Mikleoo/AppMobileVictorLouvet/tree/master'];

  for(var i = 0; i < htmlIcone.length ; i++) {
    var aHref = '<a href="'+ tabUrl[i] +'" target="_blank">' + htmlIcone[0].outerHTML + '</a>';
    paretnHtmlIcone[i].innerHTML = aHref;
  }
}
