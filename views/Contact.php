<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="container-contact-form">

  <h1 class="brand"><span>Formulaire de contact</span></h1>

  <div class="wrapper">

    <!-- COMPANY INFORMATION -->
    <div class="company-info">
      <h3>Extra Informations</h3>

      <ul>
        <li><i class="fa fa-road"></i> Cagnes sur mer</li>
        <li><i class="fa fa-globe"></i> Alpes-Maritimes - France</li>
        <li><i class="fa fa-envelope"></i> victorlouvet.pro<span style="display: none;">ANTI ROBOT</span>@gmail.com</li>
        <li><i class="fa fa-linkedin"></i> <a href="https://www.linkedin.com/in/victorlouvet/" target="_blank">linkedin - Victor Louvet</a></li>
      </ul>
    </div>
    <!-- End .company-info -->

    <!-- CONTACT FORM -->
    <div class="contact">
      <h3>Envoyez moi un mail ! Tout les champs avec une * sont obligatoires</h3>
      <p class="erreur-form">
        <?php
        if(isset($_GET['form'])) {
          if($_GET["form"] == "Captcha_Empty") {
            echo "Le captcha n'a pas été remplie";
          } elseif ($_GET["form"] == "Captcha_False") {
            echo "Le catcha a mal été remplie";
          } elseif ($_GET["form"] == "Email") {
            echo "Le mail n'a pas été remplie";
          } elseif ($_GET["form"] == "Nom") {
            echo "Le nom n'a pas été remplie";
          } elseif ($_GET["form"] == "Sujet") {
            echo "Le sujet n'a pas été remplie";
          } elseif ($_GET["form"] == "Message") {
            echo "La message n'a pas été remplie";
          } elseif ($_GET["form"] == "True") {
            echo '<span style="color: blue;">Votre message a bien été envoyé ! Vous allez recevoir une réponse sous peu.</span>';
          } elseif ($_GET["form"] == "False") {
            echo 'Votre message n\'a pas pu être envoyé...';
          }
        }
        ?>
      </p>

      <form id="contact-form" action="models/Contact.php" method="post">

        <p>
          <label>Nom *</label>
          <input type="text" name="nom" id="name" required>
        </p>

        <p>
          <label>Entreprise</label>
          <input type="text" name="entreprise" id="company">
        </p>

        <p>
          <label>Votre E-mail *</label>
          <input type="email" name="email" id="email" required>
        </p>

        <p>
          <label>Sujet *</label>
          <input type="text" name="sujet" id="sujet" required>
        </p>

        <p class="full">
          <label>Message *</label>
          <textarea name="message" rows="5" id="message" required></textarea>
        </p>

        <div class="full">
          <div class="g-recaptcha" data-sitekey="<?php $config = new Config; echo $config->sitekey; ?>"></div>
        </div>

        <p class="full">
          <button type="submit" id="btn-envoi">Envoyer</button>
        </p>

      </form>
      <!-- End #contact-form -->
    </div>
    <!-- End .contact -->

  </div>
  <!-- End .wrapper -->
</div>
<!-- End .container -->
