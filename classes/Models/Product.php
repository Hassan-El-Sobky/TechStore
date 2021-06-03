<?php
 namespace TechStore\Classes\Models;
 use  TechStore\Classes\Db;

class Product extends Db  
{
    public function __construct()
    {
        $this->table = "products";
        $this->connect();
    }

    public  function  selectId(int $id,string $fileds="*")
    {
        $sql= "SELECT $this->table.*,cats.name as cat_name from $this->table JOIN CATS on $this->table.cat_id = cats.id where $this->table.id=$id";
        $reuslt=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($reuslt);
    }

    public function selectAllWithCats(string $fields = "*") : array 
    {
        $sql = "SELECT $fields FROM $this->table JOIN cats ON $this->table.cat_id = cats.id ORDER BY $this->table.id DESC";
        
        $result = mysqli_query($this->conn , $sql);
        
        return mysqli_fetch_all($result, MYSQLI_ASSOC);  
    }
}