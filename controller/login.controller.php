<?php

require_once 'model/login.php';
session_start();

class LoginController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Login();
    }

    public function Index()
    {
        require_once 'view/login/login.php';
    }
    public function Succes()
    {
        $user = new Login();
        if (isset($_REQUEST['txtId'])) {
            $user = $this->model->Obtener($_REQUEST['txtId'], $_REQUEST['txtPassword']);
        }
        if ($user != null) {

            //Instanciamos las credenciales de la sesion
            $_SESSION['id'] = $user->id;
            $_SESSION['password'] = $user->password;

            $controller = 'alumno';
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            // Llama la accion
            call_user_func(array($controller, 'Index'));

        } else {
            header('Location: index.php');
        }
    }
}
