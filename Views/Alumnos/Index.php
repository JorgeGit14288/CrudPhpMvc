<?PHP require_once 'Model/Alumnos.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <center><h3>LISTADO DE ALUMNOS</h3></center>
        <table class="table table-responsive table-bordered table-hover">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Sexo</td>
                    <td>Nacimiento</td>
                    <td>Registrado</td>
                    <td>Correo</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $a) { ?>
                <tr>
                    <td><?php echo $a->__get('id'); ?></td>
                    <td><?php echo $a->__get('nombre'); ?></td>
                    <td><?php echo $a->__get('apellido'); ?></td>
                    <td><?php echo $a->__get('sexo'); ?></td>
                    <td><?php echo $a->__get('fechaNacimiento'); ?></td>
                    <td><?php echo $a->__get('fechaRegistro'); ?></td>
                    <td><?php echo $a->__get('correo'); ?></td>
                    <td>
                      <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                    </td>
                           
                </tr>
                
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
