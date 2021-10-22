  <div id="background-plus-image"></div>
  <img id="icon-croix-image" src="public/SVG/menu-croix.svg" alt="icone croix">
  <div id="container-triade">
    <div class="triade">
      <div style="background-image: url(<?= $UrlImageConseil1 ?>);" class="container-image-triade">
      </div>
      <div class="container-value-triade">
        <div class="container-titre-triade">
          <div class="border-left"></div>
            <h2 class="titre-triade"><?= $TitreConseil1 ?></h2>
          <div class="border-right"></div>
        </div>
        <p class="texte-triade"><?= $TextConseil1 ?></p>
        <div class="container-titre-triade">
          <div class="border-right"></div>
              <?php
                for($i=0; $i < count($UrlImageConseil1Plus1) ; $i++) {
                  echo '<div class="container-plus-image plus-triade">';
                  echo '  <img class="plus-icone" src="'. $UrlIconPlus .'" title="'. $TitleDesc1[$i] .'">';
                  echo '  <img class="plus-image" src="'. $UrlImageConseil1Plus1[$i] .'">';
                  echo '</div>';
                }
              ?>
          <div class="border-left"></div>
        </div>
      </div>
    </div>
    <div class="triade">
      <div class="container-value-triade">
        <div class="container-titre-triade">
          <div class="border-left"></div>
            <h2 class="titre-triade"><?= $TitreConseil2 ?></h2>
          <div class="border-right"></div>
        </div>
        <p class="texte-triade"><?= $TextConseil2 ?></p>
        <div class="container-titre-triade">
          <div class="border-right"></div>
          <?php
            for($i=0; $i < count($UrlImageConseil1Plus2) ; $i++) {
              echo '<div class="container-plus-image plus-triade">';
              echo '  <img class="plus-icone" src="'. $UrlIconPlus .'" title="'. $TitleDesc2[$i] .'">';
              echo '  <img class="plus-image" src="'. $UrlImageConseil1Plus2[$i] .'">';
              echo '</div>';
            }
          ?>
          <div class="border-left"></div>
        </div>
      </div>
      <div style="background-image: url(<?= $UrlImageConseil2 ?>);" class="container-image-triade">
      </div>
    </div>
    <div class="triade">
      <div style="background-image: url(<?= $UrlImageConseil3 ?>);" class="container-image-triade">
      </div>
      <div class="container-value-triade">
        <div class="container-titre-triade">
          <div class="border-left"></div>
            <h2 class="titre-triade"><?= $TitreConseil3 ?></h2>
          <div class="border-right"></div>
        </div>
        <p class="texte-triade"><?= $TextConseil3 ?></p>
        <div class="container-titre-triade">
          <div class="border-right"></div>
          <?php
            for($i=0; $i < count($UrlImageConseil1Plus3) ; $i++) {
              echo '<div class="container-plus-image plus-triade">';
              echo '  <img class="plus-icone" src="'. $UrlIconPlus .'" title="'. $TitleDesc3[$i] .'">';
              echo '  <img class="plus-image" src="'. $UrlImageConseil1Plus3[$i] .'">';
              echo '</div>';
            }
          ?>
          <div class="border-left"></div>
        </div>
      </div>
    </div>
  </div>
