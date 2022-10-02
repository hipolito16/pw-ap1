<?php

class MainController
{

    public static function index()
    {
        if (isset($_SESSION['user'])) {
            require_once('views/templates/header.php');
            require_once('views/templates/home.php');
            require_once('views/templates/footer.php');
        } else {
            require_once('views/user/login.php');
        }

    }

    public static function login()
    {
        require_once('views/user/login.php');
    }

    public static function logout()
    {
        session_destroy();
        require_once('views/user/login.php');
    }
}