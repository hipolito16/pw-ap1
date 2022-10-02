<?php

class ClientController2
{
    public static function register2() {
        require_once('views/templates/header.php');
        require_once('views/client/register.php');
        require_once('views/templates/footer.php');
    }

    public static function listClients2()
    {
        require_once('models/ClientModel.php');
        $ClientModel = ClientModel2::listClients2();
        $arrayClients = [];
        while ($line = $ClientModel->fetch_assoc()) $arrayClients[] = $line;
        require_once('views/templates/header.php');
        require_once('views/client/listClients.php');
        require_once('views/templates/footer.php');
    }

    public static function deleteClient($id) {
        require_once('db/ConnectClass.php');
        $ConnectClass2 = new ConnectClass();
        $ConnectClass2->openConnect();
        $connection2 = $ConnectClass2->getConn();

        $sqlDelete = "DELETE FROM clients WHERE idClient = '{$id}'";

        $connection2->query($sqlDelete);

        self::listClients2();
    }

    public static function detailsClient($id) {
        require_once('models/ClientModel.php');
        $ClientModel2 = ClientModel2::selectClientById($id);
        $detalhes = $ClientModel2->fetch_assoc();
        require_once('views/templates/header.php');
        require_once('views/client/detailsClient.php');
        require_once('views/templates/footer.php');
    }
}