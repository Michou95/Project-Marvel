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
                    <h1>Inscription</h1>
                  </div>
                  <p>Inscris-toi petit Homme</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="register-form">
                    <div class="form-group">
                      <input id="register-username" type="text" name="registerUsername" required class="input-material">
                      <label for="register-username" class="label-material">Pseudo</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="registerEmail" required class="input-material">
                      <label for="register-email" class="label-material">Adresse E-Mail      </label>
                    </div>
                    <div class="form-group">
                      <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                      <label for="register-passowrd" class="label-material">Mot de Passe        </label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template">
                      <label for="license">J'accepte les conditions d'utilisation</label>
                    </div>
                    <input id="register" type="submit" value="S'inscrire" class="btn btn-primary">
                  </form><small>Vous avez déjà un compte? </small><a href="<?= HOSTURL ?>?page=login" class="signup">Se connecter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <?php require_once __DIR__ . "/../include/footer.php" // récupération du chemin d'acces pour intégrer le contenu de footer ?>
  </body>
</html>
