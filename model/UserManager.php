<?php

namespace Blog_Art\Model;

require_once("model/Manager.php");

use Blog_Art\Model\Manager;

class UserManager extends Manager
{
    // ... guest,artist,admin
    public function getLogin($username,$password)
    {
      $db = $this->dbConnect();
      $query = $db->prepare("SELECT * FROM `users` WHERE username=? and password=?");
      $query->execute([$username, $password]);
      $rows = $query -> rowCount();
      $login = (($rows==1) ? true : false) ;
      return $login;
    }

    public function createUser(){

    }

    public function updateUser(){

    }

    public function deleteUser(){

    }
}
