<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=project2cv;charset=utf8', 'root', '');    
        
        return $db;
    }
}
