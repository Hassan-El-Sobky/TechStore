<?php
 namespace TechStore\Classes\Models;
 use TechStore\Classes\Db;

class Order extends Db 
{
    public function __construct()
    {
        $this->table = "orders";
        $this->connect();
    }

    public function selectAll(string $fields = "*") : array // name يجيب لم اقول عايز id علشان لم اقول هات ال ($fields = "*") ده بتجيب كل حاجه في الجدول و ده 
    {
        $sql = "SELECT $fields FROM $this->table JOIN orderdetail join products
        ON $this->table.id = orderdetail.order_id
        AND orderdetail.product_id = products.id
        GROUP BY $this->table.id";

        $result = mysqli_query($this->conn , $sql);
        
        return mysqli_fetch_all($result, MYSQLI_ASSOC); // Aree انا كده بحول ل 
    }

    public function selectId($id, string $fields = "*") //idب ال SELECT انا كده بعمل 
    {
        $sql = "SELECT $fields FROM $this->table JOIN orderdetail join products 
        ON $this->table.id = orderdetail.order_id
        AND orderdetail.product_id = products.id
        WHERE $this->table.id = $id";
        
        $result = mysqli_query($this->conn, $sql);

        return mysqli_fetch_assoc($result);
    }

} 