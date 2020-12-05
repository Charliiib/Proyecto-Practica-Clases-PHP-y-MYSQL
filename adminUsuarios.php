<?php  
    require 'config/config.php';
    require 'funciones/autenticar.php';
    autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php'; 
    $usuarios =  listarUsuarios();  
    include 'includes/header.html';     
    include 'includes/nav.php';  
?>

<main class="container mb-5">
        <h1>Panel de administración de Usuarios</h1>

<a href="admin.php" class="btn btn-outline-secondary my-3">Volver a principal</a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2"><a href="formAgregarUsuario.php" class="btn btn-dark">Agregar</a></th>
                </tr>
            </thead>
                <tbody>
<?php
    while ($usuario= mysqli_fetch_assoc($usuarios) ) {
?>
                <tr>
                    <td><?=  $usuario['idUsuario']  ?></td>
                    <td><?=  $usuario['usuNombre']  ?></td>
                    <td><?=  $usuario['usuApellido']  ?></td>
                    <td><?=  $usuario['usuEmail']  ?></td>
                    <td><a href="formModificarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-outline-secondary">
                    Modificar</a></td>
                    <td><a href="formEliminarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-outline-secondary">
                    Eliminar</a></td>
                </tr>
<?php
}
?>

                </tbody>
        </table>

<a href="admin.php" class="btn btn-outline-secondary my-3">Volver a principal</a>

</main>

<?php 
include 'includes/footer.php'; 
?>