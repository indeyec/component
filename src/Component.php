<?php

namespace Component;

class Component
{
    public function error()
    {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        include("file_with_errors.php");
    }

    public function __destruct(){
        $_SESSION['test'] = true;
        session_write_close();
    }
    public function cookies($cookie_name){
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
    }
}
}