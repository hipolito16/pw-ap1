<?php

class UserController
{

    public function validateLogin()
    {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $_SESSION['userName'] = $_POST['userName'];
        $_SESSION['password'] = $_POST['password'];
        require_once('models/UserModel.php');
        require_once('controllers/MainController.php');
        $UserModel = new UserModel();

        $consultaUsuario = $UserModel->consultUser($userName);
        $dadosUsuario = $consultaUsuario->fetch_assoc();

        $this->verifyIsEmpty($_POST['userName'], $_POST['password']);

        if (!$dadosUsuario) {
            $this->verifyIsEmpty2($_POST['userName'], $_POST['password']);
            $this->verifyIsEmpty($_POST['userName'], $_POST['password']);
            return MainController::login();
        } else if ($dadosUsuario['user'] == $userName && $dadosUsuario['password'] == $password) {
            $_SESSION['user'] = $dadosUsuario;
            $this->successUnset($_SESSION['userName'], $_SESSION['password']);
            return MainController::index();
        } else if ($dadosUsuario['password'] != $password) {
            $_SESSION['errorClass2'] = 'is-invalid';
            $_SESSION['errorMsg2'] = 'Usuário ou senha inválido';
            $this->verifyIsEmpty($_POST['userName'], $_POST['password']);
        }

        return MainController::login();
    }

    public function verifyIsEmpty($userName, $password)
    {
        if (empty($userName)) {
            $_SESSION['errorClass1'] = 'is-invalid';
            $_SESSION['errorMsg1'] = 'Campo obrigatório';
        }
        if (empty($password)) {
            $_SESSION['errorClass2'] = 'is-invalid';
            $_SESSION['errorMsg2'] = 'Campo obrigatório';
        }
    }

    public function verifyIsEmpty2($userName, $password)
    {
        if (isset($userName) && isset($password)) {
            $_SESSION['errorClass2'] = 'is-invalid';
            $_SESSION['errorMsg2'] = 'Usuário ou senha inválido';
        }
        if (empty($userName) && isset($password)) {
            unset($_SESSION['errorClass2']);
            unset($_SESSION['errorMsg2']);
        }
    }

    public function successUnset(&$userName, &$password) {
        unset($_SESSION['userName']);
        unset($_SESSION['password']);
    }
}