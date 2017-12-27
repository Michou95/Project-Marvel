<?php
require_once "controller.php";

class LoginController extends Controller{

  public function login(array $user): ?string{ //Typage donnée en sortie (Null ou string)

    if (!isset($user["email"]) || !isset($user["password"]))//verification de l'existance
      return "view/no-connect/login.php";

    if (empty(trim($user["email"])) || empty(trim($user["password"])))//verification - remplie
      return "view/no-connect/login.php";

    $email = htmlspecialchars(trim($user['email']));//Modification des balises html
    $password = strip_tags(trim($user['password']));//suppression des balises html php

    if(!$this->validateEmail($email))//verification de l'email
      return "view/no-connect/index.php";

    if ($email == "toto@toto.toto" && $password == 'toto'){
      $_SESSION["user"] = $user;
      return "view/connect/index.php";
    }
    else{
      return "view/no-connect/login.php";
    }
  }
}

?>
