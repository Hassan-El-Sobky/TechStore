<!-- cart اخد البيانات الاسم والفون والايمل formده علشان لم املاء ال-->
<?php 

require_once("../app.php");
use TechStore\Classes\Cart;
use TechStore\Classes\Models\Order;
use TechStore\Classes\Models\OrderDetail;
use TechStore\Classes\validation\validator;

$cart = new Cart;

if ($request->postHas('submit') and $cart->count() !== 0 ) {
    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $address = $request->post('address');

   // validation
   $validator = new Validator;
   
   $validator->validate('name', $name, ['required', 'str', 'max']);

    $validator->validate('email', $email, ['email' , 'max']);
   
   $validator->validate('phone', $phone, ['required', 'str', 'max']);
   
   if (! empty($address)){ // NULL  databases او لا لو مدخلش يجي في ال addressده علشان يدخل ال
        $validator->validate('address', $address, ['str', 'max']);
    }
    else{
        $address = "NULL";
    }

    if ($validator->hasErrors()){// SESSION وخزن في errorطلع ال error لو 
        
        $session->set("errors" , $validator->getErrors());
        $request->redirect("cart.php");
    }
    else{
        $order = new Order;
        $OrderDetail = new OrderDetail;
        
        $orderId = $order->insertAndGetId("name , email , phone , address" , " '$name' , '$email' , '$phone' , '$address' ");

        foreach ($cart->all() as $prodId => $prodData){
            $qty = $prodData['qty'];
           if( $OrderDetail->insert("`order_id`, `product_id`, `qty`" , "'$orderId','$prodId','$qty'")) {

            echo $orderId ."<br>".$prodId."<br>".$qty;
           } else {
               echo "feh error";
           }

        }

        $cart->empty();

       $request->redirect("products.php");
    }
}
else {
    $request->redirect("products.php");
}