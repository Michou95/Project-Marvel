<!DOCTYPE html>
<html>
  <head>
    <?php require_once __DIR__ . "/../include/head.php" // récupération du chemin d'acces pour intégrer le contenu de head ?>
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Connexion</h1>
                  </div>
                  <p>Connecte toi petit Homme</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post" action="<?= HOSTURL ?>">
                    <div class="form-group">
                      <input id="login-username" type="email" name="email" required="" class="input-material">
                      <label for="login-username" class="label-material">E-Mail</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required="" class="input-material">
                      <label for="login-password" class="label-material">Mot de Passe</label>
                    </div><button id="login" type="submit" class="btn btn-primary">Se connecter</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Mot de Passe oublié?</a><br><small>Vous n'avez pas de compte? </small><a href="<?= HOSTURL ?>?page=register" class="signup">Inscription</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <?php require_once __DIR__ . "/../include/footer.php" // récupération du chemin d'acces pour intégrer le contenu de footer ?>
  </body>
</html>
