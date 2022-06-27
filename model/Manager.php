<?php

namespace Blog_Art\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=blog_art;charset=utf8', 'root', '');
        return $db;
    }
}
