<?php

namespace Blog_Art\Controller;

require_once('model/UserManager.php');
require_once('model/CreationManager.php');

use Blog_Art\Model\UserManager;
use Blog_Art\Model\CreationManager;

/**
*
*/
class FrontendController
{

  public function __construct()
  {
    $creations = new CreationManager();
    $creations = $creations->homepage();

    foreach ($creations as $creation ) {
      if ($creation["section"] == "1.left") {
        $sec[0] = $creation;
      }
      if ($creation["section"] == "1.right") {
        $sec[1] = $creation;
      }
      if ($creation["section"] == "2") {
        $sec[2] = $creation;
        $part = explode("/", $sec[2]["description"] );
      }
      if ($creation["section"] == "3.left") {
        $sec[3] = $creation;
      }
      if ($creation["section"] == "3.right") {
        $sec[4] = $creation;
      }
      if ($creation["section"] == "4") {
        $sec[5] = $creation;
      }
    }
    require('view/front/home.php');
  }

  public static function showGallery()
  {
    $creations = new CreationManager();
    $creations = $creations->getAll();
    //var_dump($creations);
    var_dump ($creations[0]);
    var_dump ($creations[1]);
    /*foreach ($creations as $key ) {

       echo $key["id"];
       echo $key["image"];

    }*/
  }

  public static function showCreation($id)
  {
      $creation = new CreationManager();
      $creation = $creation->getSingle($id);
      var_dump($creation);
  }

  public static function showAboutPage()
  {
    //require('view/front/about.php');
  }

  public static function login()
  {
    $username = stripslashes($_POST['username']);
    $password = stripslashes($_POST['password']);
    $user = new UserManager();
    $login = $user->getLogin($username,$password);
    if ($login) {
      $_SESSION['username'] = $username;
      //header("Location: index.php");
      echo "login correcte";
    }
    else {
      //return back()->with('name', 'value');
      echo "sorry";
      //$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
    //require('view/frontend/listPostsView.php');

  }

}
