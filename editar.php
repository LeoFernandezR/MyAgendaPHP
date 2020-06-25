<?php 
    include_once 'inc/layout/header.php';
    include_once 'inc/funciones/funciones.php';

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    if(!$id) {
        die('No es valido');
    };

    $resultado = obtenerContacto($id);
    $contacto = $resultado->fetch_assoc();
?>

<div class="contenedor-barra">
    <div class="contenedor barra">
        <a href="index.php" class="btn volver">Volver</a>
        <h1>Editar Contactos</h1>
    </div>
</div>

<div class="bg-amarillo sombra contenedor">
    <form action="#" id="contacto">
        <legend>Edite el Contacto</legend>

        <?php include_once 'inc/layout/formulario.php'; ?>
    </form>
</div>


<?php include_once 'inc/layout/footer.php'; ?>