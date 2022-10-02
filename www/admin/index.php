<?php
session_start();
require_once('controllers/ClientController.php');
require_once('models/ClientModel.php');

if (!isset($_GET['controller'])) {
    require_once('controllers/MainController.php');
    $MainController = new MainController();
    $MainController->index();
} else {
    switch ($_REQUEST['controller']) {
        case 'main':
            require_once('controllers/MainController.php');
            $MainController = new MainController();
            if (!isset($_GET['action'])) {
                $MainController->index();
            } else {
                switch ($_REQUEST['action']) {
                    case 'login':
                        $MainController->login();
                        break;
                    case 'logout':
                        $MainController->logout();
                        break;
                    case 'home':
                        $MainController->index();
                        break;
                }
            }
            break;
        case 'user':
            require_once('controllers/UserController.php');
            $UserController = new UserController();
            if (!isset($_GET['action'])) {

            } else {
                switch ($_REQUEST['action']) {
                    case 'validateLogin':
                        $UserController->validateLogin();
                        break;
                    case 'listClients':
                        ClientController2::listClients2();
                        break;
                    case 'register':
                        ClientController2::register2();
                        break;
                    case 'registerClient2':
                        ClientModel2::registerClient2();
                        break;
                    case 'deleteClient':
                        ClientController2::deleteClient($_GET['id']);
                        break;
                    case 'detailsClient':
                        ClientController2::detailsClient($_GET['id']);
                        break;
                }
            }
            break;
    }
}