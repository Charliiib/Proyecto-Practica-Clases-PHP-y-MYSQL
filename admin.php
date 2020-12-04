<?php
    require 'config/config.php';
    require 'funciones/autenticar.php';
    autenticar();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

<main class="container">
        <h1>Dashboard - Panel principal</h1>

        <section class="list-group">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">
                Panel de administración de marcas.
             </a>
             <a href="adminCategorias.php" class="list-group-item list-group-item-action">
                Panel de administración de Categorías.
            </a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">
                Panel de administración de Productos.
            </a>
             <a href="adminUsuarios.php" class="list-group-item list-group-item-action">
                Panel de administración de Usuarios.
            </a>
        </section>

    </main>

<?php  
include 'includes/footer.php';  
?>