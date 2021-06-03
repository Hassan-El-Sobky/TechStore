<?php 
require_once("../../app.php");

use TechStore\Classes\validation\validator;
use TechStore\Classes\Models\Admin;

if ($request->postHas('submit')) {

    $name = $request->post('name');
    $email = $request->post('email');
    $password = $request->post('password');
    $confirm_password = $request->post('confirm_password');

   // validation
   $validator = new Validator;

    $validator->validate('name', $name, ['required' , 'str' , 'max']);
    $validator->validate('email', $email, ['required' , 'email' , 'max']);

    if (! empty ($password) and ! $password == $confirm_password ) {
        $validator->validate('password', $password, ['required' , 'str' , 'max']);

    }
    if ($validator->hasErrors()) {
        $session->set("errors" , $validator->getErrors());
        $request->aredirect("profile.php");
    }
    else{
        $ad = new Admin;

        if (! empty ($password)){
            $hashPassword = password_hash($password , PASSWORD_DEFAULT);
            $ad->update("name = '$name' , email = '$email' , `password` = '$hashPassword' " , $session->get('adminId'));
        }
        else{
            $ad->update("name = '$name' , email = '$email' " , $session->get('adminId'));

        }
        $session->set('success' , 'profile edited successfully');
        $request->aredirect("handlers/handle-logout.php");
    }
}
else{
    $request->aredirect("login.php");
}

  