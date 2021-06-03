<?php
 namespace TechStore\Classes;

abstract class Db
{
    public $conn;
    public $table;

    public function connect()
    {
        // $this->conn = mysqli_connect("localhost" , "root" , "" , "techstore");
        $this->conn = mysqli_connect(DB_SERVERNAME , DB_USERNAME , DB_PASSWORD , DB_NAME);
	}

    public function selectAll(string $fields = "*") : array // name يجيب لم اقول عايز id علشان لم اقول هات ال ($fields = "*") ده بتجيب كل حاجه في الجدول و ده 
    {
        $sql = "SELECT $fields FROM $this->table";
        $result = mysqli_query($this->conn , $sql);
        
        return mysqli_fetch_all($result, MYSQLI_ASSOC); // Aree انا كده بحول ل 
    }

    public function selectId(int $id, string $fields = "*") //idب ال SELECT انا كده بعمل 
    {
        $sql = "SELECT $fields FROM $this->table WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);

        return mysqli_fetch_assoc($result);
    }

    public function selectWhere($conds, string $fields = "*") : array // ده علشان لو عايز اعرض حاجات معاينه او سعر اكبر من مثلا 4000 و هكذه 
    {
        $sql = "SELECT $fields FROM $this->table WHERE $conds";
        $result = mysqli_query($this->conn , $sql);
        
        return mysqli_fetch_all($result, MYSQLI_ASSOC); // Aree انا كده بحول ل 
    }

    public function getCount() // ده علشان يجيب عدد الصفوف من الجدول 
    {
        $sql = "SELECT COUNT(*) AS cnt FROM $this->table";
        $result = mysqli_query($this->conn , $sql);
        return mysqli_fetch_assoc($result)['cnt'];
    }
    
    public function insert(string $fields, string $values) // values ده بتاخد الاسم وتاخد ال 
    {
        $sql = "INSERT INTO $this->table ($fields) VALUES ($values)";
        return mysqli_query($this->conn , $sql);
    }

    public function insertAndGetId(string $fields, string $values) 
    {
        $sql = "INSERT INTO $this->table ($fields) VALUES ($values)";
        mysqli_query($this->conn , $sql);
        return mysqli_insert_id($this->conn);
    }

    public function update(string $set, $id) //updateده علشان ال 
    {
        $sql = "UPDATE $this->table SET $set WHERE id = $id";
        return mysqli_query($this->conn , $sql);
    }

    public function delete($id) // deleteده علشان ال 
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return mysqli_query($this->conn , $sql);
    }
}