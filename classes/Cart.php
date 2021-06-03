<?php
 namespace TechStore\Classes;

 class Cart 
{
    public function add(string $id , array $prodData)
    {
        $_SESSION['cart'][$id] = $prodData;
    }

    public function count()
    {
        if(isset($_SESSION['cart'])){
            return count($_SESSION['cart']);
            }
            else{
                return 0;
            }
    }
    public function total()
    {
        $total = 0;

        if(isset($_SESSION['cart'])){
            
            foreach ($_SESSION['cart'] as $id => $proddata) {
                $total += $proddata['qty'] * $proddata['price'];
            }
        }
        return $total;
    }

    public function has(string $id) : bool //  لم اجي اضغط ع منتج buttonده علشان اخفي ال 
    {
        if(isset($_SESSION['cart'])) 
        {
            return array_key_exists($id, $_SESSION['cart']);
        }
        else {
            return false;
        }
    }

    public function all()
    {
        if(isset($_SESSION['cart'])) 
        {
            return $_SESSION['cart'];
        }
        else{
            return [];
        }
    }

    public function remove(string $id)
    {
        unset($_SESSION['cart'][$id]);
    }
    public function empty()
    {
        $_SESSION['cart'] = [];
    }
}