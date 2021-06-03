<!-- cart ده علشان لم اضغط ع اي منتج يحفظ المنتج في الملف ده صفحه ال  -->
<?php 

require_once("../app.php");
use TechStore\Classes\Cart;

if ($request->postHas('submit')) {
    $id = $request->post('id');
    $qty = $request->post('qty');
    $name = $request->post('name');
    $price = $request->post('price');
    $img = $request->post('img');

    $prodData = [
        'qty' =>$qty,
        'name' =>$name,
        'price' =>$price,
        'img' =>$img,
    ];
    
    $cart = new cart;
    $cart->add($id, $prodData);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    $request->redirect("products.php");
}