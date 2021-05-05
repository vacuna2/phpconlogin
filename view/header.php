<!DOCTYPE html>
<html lang="es">

<head>
    <title>Base de Datos Colegio</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row pt-lg-4">
            <div class="col-md-3">
                <a class="btn btn-outline-dark w-100 p-3" href="?c=Alumno&a=Index">ALUMNOS</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-outline-dark w-100 p-3" href="?c=Curso&a=Index">CURSOS</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-outline-dark w-100 p-3" href="?c=Alumno&a=Index">ALUMNO-CURSO</a>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

    <?php
    /*if ($_POST) {
        if ($_SESSION) {
            if (isset($_POST["btnAlumno"])) {
                $controller = 'alumno';
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                // Llama la accion
                call_user_func(array($controller, 'Index'));
            }
            if (isset($_POST["btnCursos"])) {
                $controller = 'curso';
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                // Llama la accion
                call_user_func(array($controller, 'Index'));
            }
            if (isset($_POST["btnAlumnosCursos"])) {
            }
        } else {
            header('Location: index.php');
        }
    }
    */ ?>
    <div class="container">