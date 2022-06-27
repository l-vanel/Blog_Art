<?php
declare(strict_types=1);

session_start();

spl_autoload_register(static function(string $fqcn):void{
  /*$path = str_replace('\\','/',$fqcn).'.php';
  $path = preg_replace('/Blog_Art\//','',$path);*/
  $path = preg_replace('/Blog_Art\\\\/','',$fqcn);
  $path = str_replace('\\','/',$path).'.php';
  require_once($path);

});

use Blog_Art\Controller\FrontendController;

try {

  if (isset($_GET['action'])) {
    //login
    if ($_GET['action'] == 'login')
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
    //show about page
    elseif ($_GET['action'] == 'about')
    {
      FrontendController::showAboutPage();
    }
    //add a like
    elseif ($_GET['action'] == 'like')
    {
      /*if (isset($_GET['id']) && $_GET['id'] > 0) {
      //post();
    }
    else {
    throw new Exception('Aucun identifiant de billet envoyé');
    }*/
    }
    //add comment
    elseif ($_GET['action'] == 'addComment')
    {
      /*if (isset($_GET['id']) && $_GET['id'] > 0) {
      if (!empty($_POST['author']) && !empty($_POST['comment'])) {
      addComment($_GET['id'], $_POST['author'], $_POST['comment']);
    }
    else {
    throw new Exception('Tous les champs ne sont pas remplis !');
    }
    }
    else {
    throw new Exception('Aucun identifiant de billet envoyé');
    }*/
    }
  }
  else
  {
    new FrontendController();
    //FrontendController::showGallery();
  }

}
catch(Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
