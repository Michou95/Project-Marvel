<?php
require_once "controller.php";

class RegisterController extends Controller{

  public function register(array $user): ?string{ //Typage donnée en sortie (Null ou string)

    if (!isset($user["email"]) || !isset($user["password"] || !isset($user["username"]))//verification de l'existance
      return "view/no-connect/register.php";

    if (empty(trim($user["email"])) || empty(trim($user["password"])) || empty(trim($user["username"])))//verification - remplie
      return "view/no-connect/register.php";

    $email = htmlspecialchars(trim($user['email']));//Modification des balises html
    $password = strip_tags(trim($user['password']));//suppression des balises html php
    $password = strip_tags(trim($user['username']));// Supression des balises php

    if(!$this->validateEmail($email))//verification de l'email
      return "view/no-connect/register.php";

    if ($email == "toto@toto.toto" && $password == 'toto'){
      $_SESSION["user"] = $user;
      return "view/connect/index.php";
    }
    else{
      return "view/no-connect/register.php";
    }
  }
}
 ?>
