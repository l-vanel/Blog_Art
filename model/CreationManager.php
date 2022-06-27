<?php

namespace Blog_Art\Model;

require_once("model/Manager.php");

use Blog_Art\Model\Manager;

class CreationManager extends Manager
{
    public function getAll()
    {
        $db = $this->dbConnect();
        $query = $db -> query('SELECT * FROM creations');
			  $rows = $query -> fetchAll();
				
        return $rows;
    }

    public function getSingle($creationId)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT * FROM creations WHERE id = ?');
        $query->execute(array($creationId));
        $row = $query->fetch();

        return $row;
    }

    public function homePage()
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT * FROM creations WHERE visibility = "home"');
        $query->execute();
        $rows = $query->fetchAll();

        return $rows;
    }

    public function createCreation(){

    }

    public function updateCreation(){

    }

    public function deleteCreation(){

    }
}
