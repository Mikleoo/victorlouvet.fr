// Script that manages sending data to the ajax request for slide validation

function ValidateSlide(id, bool) {

  var titrePage = document.getElementById("Titre-page").textContent;

  if (titrePage == "Manga-Anime") {

    AjaxRequest('models/ValidateSlide.php', 'POST', {
      'id' : id,
      'passion' : "Manga",
      'bool' : bool
    });

  } else if (titrePage == "Cuisine") {

    AjaxRequest('models/ValidateSlide.php', 'POST', {
      'id' : id,
      'passion' : "Cuisine",
      'bool' : bool
    });

  }

}
