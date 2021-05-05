<h1 class="page-header">Curso - Usuario: <?php echo ($_SESSION['id'])?></h1>

<div class="well well-sm text-right">
    <a class="btn btn-outline-dark w-100 p-3" href="?c=Curso&a=Crud">Nuevo curso </a>
</div>

<table class='table table-hover table-striped'>
    <thead>
        <tr>
            <th style="width:500px;">Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td>
                <a  class="text-dark" href="?c=Curso&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a class="text-dark" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Curso&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 