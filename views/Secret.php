<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div id="container-form-secret">
  <h1 id="titre-principal" class="titre-page-secrete">Bravo, vous avez découvert la page secrète !</h1>
  <h2 id="titre-secondaire" class="titre-page-secrete">Vous pouvez remplir ce formulaire pour poster un "conseil" qui s'affichera sur les pages Cuisine et Manga-Anime !</h2>
  <form id="form-secret" action="models/AddForm.php" method="post">
    <fieldset id="fieldset">
      <legend id="legend-form" > Votre conseil ! </legend>
      <p class="erreur-form">
      <?php
      if(isset($_GET['form'])) {
        if($_GET["form"] == "Captcha_Empty") {
          echo 'Le captcha n\'a pas été remplie';
        } elseif ($_GET["form"] == "Captcha_False") {
          echo 'Le catcha a mal été remplie';
        } elseif ($_GET["form"] == "Email") {
          echo 'Le mail a mal été remplie';
        } elseif ($_GET["form"] == "Pseudo") {
          echo 'Le pseudo n\'a pas été remplie';
        } elseif ($_GET["form"] == "Conseil") {
          echo 'Le conseil n\'a pas été remplie';
        } elseif ($_GET["form"] == "Passion") {
          echo 'La passion n\'a pas été selectionné';
        } elseif ($_GET["form"] == "PassionExist") {
            echo 'Le conseil existe déjà dans cette passion';
        } elseif ($_GET["form"] == "False") {
          echo 'Le mail n\' pas pu être envoyé...';
        } elseif ($_GET["form"] == "True") {
          echo '<span style="color:blue">Le formulaire à bien pris en compte votre ajout !</span>';
        }
      }
      ?>
      </p>
      <label class="text-form" for="input_email">Mail (facultatif) : </label><br>
      <input type="email" class="input_form" id="input_email" name="email" size="18" maxlength="50" title="Mail (facultatif)" placeholder="Mail" value="<?php if(isset($_GET['Pseudo'])){ echo $_GET['Pseudo']; }?>"><br>

      <label class="text-form" for="input_pseudo">Pseudo* (obligatoire) : </label><br>
      <input type="text" class="input_form" id="input_pseudo" name="pseudo" size="18" maxlength="20" title="Pseudo* (obligatoire)" placeholder="Pseudo" value="<?php if(isset($_GET['Pseudo'])){ echo $_GET['Pseudo']; }?>" required><br>

      <label class="text-form" for="input_conseil">Conseil* (obligatoire) : </label><br>
      <input type="text" class="input_form" id="input_conseil" name="conseil" size="18" maxlength="30" title="Conseil* (obligatoire)" placeholder="Conseil" value="<?php if(isset($_GET['Ponseil'])){ echo $_GET['Conseil']; }?>" required>

      <p>Choissisez dans quels passions ajouter votre conseil : </p>
      <input type="radio" class="input_radio" id="manga" name="manga-cuisine" value="Manga">
      <label class="radio_passion" for="manga">Manga</label>
      <input type="radio" class="input_radio" id="cuisine" name="manga-cuisine" value="Cuisine">
      <label class="radio_passion" for="cuisine">Cuisine</label><br><br>

      <div class="g-recaptcha" data-sitekey="<?php $config = new Config; echo $config->sitekey; ?>"></div>

      <button type="submit" id="button-form" name="submitpost" value="Valider">Ajouter</button>
    </fieldset>
  </form>
</div>
