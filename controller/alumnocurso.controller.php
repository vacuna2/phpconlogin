<?php
require_once 'model/alumnocurso.php';

class AlumnocursoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Alumnocurso();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alumnocurso/alumnocurso.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new alumnocurso();
        
        if(isset($_REQUEST['Curso_id'])){
            $alm = $this->model->Obtener($_REQUEST['Curso_id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumnocurso/alumnocurso-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new alumnocurso();
        
        $alm->id = $_REQUEST['Curso_id'];
        $alm->id = $_REQUEST['Alumno_id'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Curso_id']);
        header('Location: index.php');
    }
}