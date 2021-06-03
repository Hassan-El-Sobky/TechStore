<!-- cart ده علشان لم اضغط ع اي منتج يحذف المنتج من ال  -->
<?php 

require_once("../app.php");
use TechStore\Classes\Cart;

if ($request->getHas('id'))
{
    $id = $request->get('id');

    $cart = new Cart;
    $cart->remove($id);

    $request->redirect("cart.php");
}