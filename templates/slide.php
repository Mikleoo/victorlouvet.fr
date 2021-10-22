
<div id="container-slider-arrow">
  <img src="<?= $UrlFlecheSlideGauche ?>" class="prev" onclick="MoveSlide(-1)">

  <div id="container-slider">

    <?php
    for ($i = 0; $i < count($TabSlide) ; $i++) {
        if (isset($TabSlide[$i])) {
            echo '<div style="background-image: url('.$UrlImgBackgroundSlide.');" class="slide" id="Slide-'. $TabSlide[$i][0] .'">' . "\n";
            echo '      <p class="pseudo-text-slide">'. $TabSlide[$i][2] .'</p>' . "\n";
            echo '      <p class="conseil-text-slide">'. $TabSlide[$i][3] .'</p>' . "\n";
            if(isset($_SESSION['username'])) {
              if($_SESSION['username'] == "Mikleo"){
                echo '      <button id="validate" style="margin: 2px;padding: 2px;" onClick="ValidateSlide('. $TabSlide[$i][0] .', true)">validate</button>' . "\n";
                echo '      <button id="archived" style="margin: 2px;padding: 2px;" onClick="ValidateSlide('. $TabSlide[$i][0] .', false)">archived</button>' . "\n";
              }
            }
            echo '    </div>' . "\n";
            echo "\n    ";
        }
    }
    ?>

  </div>

  <img src="<?= $UrlFlecheSlideDroite ?>" class="next" onclick="MoveSlide(1)">

</div>
