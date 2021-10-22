<html>
    <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="administrator/public/CSS/CSS_Connexion/Style_Connexion.css" media="screen" type="text/css" />
    </head>
    <body>

      <div id="container">
          <!-- zone de connexion -->

          <form action="administrator/models/connexion.php" method="POST">
              <h1>Connexion</h1>
              <?php
              if(isset($_GET['con'])) {
                if($_GET["con"] == "False") {
                  echo '<p style="color:indianred">Username or password wrong</p>';
                }
              }
              ?>
              <label><b>Nom d'utilisateur</b></label>
              <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

              <label><b>Mot de passe</b></label>
              <input type="password" placeholder="Entrer le mot de passe" name="password" required>

              <input type="submit" id='login' value='LOGIN' >
              <?php
              if(isset($_GET['erreur'])){
                  $err = $_GET['erreur'];
                  if($err == 1 || $err == 2) {
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                  }
              }
              ?>
          </form>
          <form action="administrator/models/deconnexion.php" method="POST">
            <input type="submit" id='logout' value='LOGOUT'>
          </form>
      </div>

</body>
</html>
