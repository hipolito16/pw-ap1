<?php

class ClientModel2
{

    public static function listClients2()
    {
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $connection = $ConnectClass->getConn();

        $sql = "SELECT * FROM clients";

        return $connection->query($sql);
    }

    public static function selectClientById($id)
    {
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $connection = $ConnectClass->getConn();

        $sql = "SELECT * FROM clients WHERE idClient = '{$id}'";

        return $connection->query($sql);
    }

    public static function registerClient2()
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        require_once('db/ConnectClass.php');
        require_once('controllers/ClientController.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $connection = $ConnectClass->getConn();
        if (isset($name) && isset($phone) && isset($email) && isset($address)) {
            $sql = "INSERT INTO clients (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";
            $connection->query($sql);
            $_SESSION['success'] = true;
        } else {
            $_SESSION['failed'] = true;
        }
        ClientController2::register2();
    }
}