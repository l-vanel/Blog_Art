<?php
declare(strict_types=1);

session_start();

spl_autoload_register(static function(string $fqcn):void{
  $path = preg_replace('/Blog_Art\\\\/','',$fqcn);
  $path = str_replace('\\','/',$path).'.php';
  require_once($path);
});

use Blog_Art\Controller\FrontendController;

try {

  if (isset($_GET['action'])) {
    //profile
    if ($_GET['action'] == 'profile')
    {
      if (isset($_SESSION['username'])) {
        require('view/front/profile/logout.php');
      }else {
        require('view/front/profile/login.php');
      }

    }
    //login
    elseif ($_GET['action'] == 'login')
    {
      if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['username']) and !empty($_POST['password']))
      {
        FrontendController::login();
      }
      else
      {
        throw new Exception('Veuillez remplir les champs');
      }
    }
    //logout
    elseif ($_GET['action'] == 'logout')
    {

        session_destroy();
        unset($_SESSION['username']);
        require('view/front/profile/login.php');

    }
    //show all creations
    elseif ($_GET['action'] == 'gallery')
    {
      FrontendController::showGallery();
    }
    //show single creation
    elseif ($_GET['action'] == 'single')
    {
      if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
      {
        //FrontendController::showCreation($_GET['id']);
        echo "string";
      }
      else
      {
        throw new Exception('Aucun identifiant envoyé');
      }
    }
    else
    {
      new FrontendController();
    }
  }
  else
  {
    new FrontendController();
  }

}
catch(Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
