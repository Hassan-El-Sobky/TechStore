<?php
 namespace TechStore\Classes\Models;
 use  TechStore\Classes\Db;

class OrderDetail extends Db    
{
    public function __construct()
    {
        $this->table = "ordersdetails";
        $this->connect();
    }

    public function selectWithProduct($orderId)
    {
        $sql = "SELECT $this->table.qty, products.name, products.price FROM $this->table JOIN products
        ON $this->table.product_id = products.id
        WHERE order_id = $orderId";

        $result = mysqli_query($this->conn , $sql);
        
        return mysqli_fetch_all($result, MYSQLI_ASSOC); 
    }
}