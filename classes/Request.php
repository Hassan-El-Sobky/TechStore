<?php
 namespace TechStore\Classes;

class Request
{
    public function get(string $key)
    {
        return $_GET[$key];
    }
    public function post(string $key)
    {
        return $_POST[$key];
    }
    public function files(string $key)
    {
        return $_FILES[$key];
    }
    public function postClean($key)
    {
        return trim(htmlspecialchars($_POST[$key]));    // والمسافات htmlاكود ال POST ده بيمنع في اي 
    }
    public function getHas(string $key)
    {
        return isset($_GET[$key]);  // GET ل false او true ده هترجع 
    }
    public function postHas(string $key)
    {
        return isset($_POST[$key]);  // POST ل false او true ده هترجع 
    }
    public function redirect($path)
    {
        header("location: " . URL . $path);  // POST ل false او true ده هترجع 
    }
    public function aredirect($path)
    {
        header("location: " . AURL . $path);  // POST ل false او true ده هترجع 
    }
}