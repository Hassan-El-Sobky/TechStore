<?php
 namespace TechStore\Classes\Models;
 use  TechStore\Classes\Db;

class Cat extends Db    // Db ال class انا كده بورث من 
{
    public function __construct()
    {
        $this->table = "cats";
		
        $this->connect();
    }
}