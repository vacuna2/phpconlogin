<h1 class="page-header">
    <?php echo $alm->Curso_id != null ? $alm->Curso_id : 'Alumno Curso'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=alumnocurso">Cursos</a></li>
  <li class="active"><?php echo $alm->Curso_id != null ? $alm->Curso_id : 'Nuevo Curso'; ?></li>
</ol>

<form id="frm-alumnocurso" action="?c=alumnocurso&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese nombre del curso" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-curso").submit(function(){
            return $(this).validate();
        });
    })
</script>