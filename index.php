<?php
  require_once "config.php";
  $view = "view/no-connect/login.php";
  if(isset($_GET['page'])){
    foreach(PAGE_SITE as $key => $value){
      if ($key == $_GET['page']){
        $view = $value;
        break;
      }
    }
    $view = "view/no-connect/" . $_GET["page"] . ".php";
  }
  
  if($_POST){
    if (isset($_POST['page'])){
      switch ($_POST['page']) {
        case 'login':
          require "controller/loginController.php";
          $controllerLogin = new LoginController();
          $view = $controllerLogin->login($_POST);
        break;

        case 'register':
          require "controller/registerController.php";
          $controllerRegister = new RegisterController();
          $view = $controllerRegister->register($_POST);
        break;
      }
    }
  }
  require $view;
 ?>
