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
      $username = $db->mysqli_real_escape_string($username);
      $password = $db->mysqli_real_escape_string($password);
      $query = $db->prepare("SELECT * FROM `users` WHERE username=? and password=?");
      $query->execute($username,hash('sha256', $password));
      $rows = mysqli_num_rows($query);

      $log = ($rows==1) ? true : false ;

      return $log;
    }

    public function createUser(){

    }

    public function updateUser(){

    }

    public function deleteUser(){

    }
}
