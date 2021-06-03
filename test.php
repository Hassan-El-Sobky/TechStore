<?php

require_once("app.php");

use TechStore\Classes\Cart;
use TechStore\Classes\Models\OrderDetail;

$cart = new Cart;
echo $cart->total();


