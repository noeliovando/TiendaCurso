<!DOCTYPE HTML>
<html lang = "es">
<?php
/**
 * Creado Por: Noeli Ovando
 * Date: 16/03/2018
 * Time: 11:35 AM
 */
?>

<head>
    <meta charset="utf-8"/>
    <title>CURSO PHP CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form action="<?php echo $helper->url("cliente","crear");?>" method="post" class="col-lg-5">
    <h3>Añadir Cliente</h3>
    <hr/>
    Cedula: <input type="text" name="cedula" class="form-control"/>
    Nombre: <input type="text" name="nombre" class="form-control"/>
    Apellido: <input type="text" name="apellido" class="form-control"/>
    Telefono: <input type="text" name="telefono" class="form-control"/>
    Dirección: <input type="text" name="direccion" class="form-control"/>
    Email: <input type="text" name="email" class="form-control"/>
    <input type="submit" value="enivar" class="btn btn-success"/>
</form>
<div class="col-lg-7">
    <h3>Usuarios</h3>
    <hr/>
</div>
<section class="col-lg-7 cliente" style="height:400px;overflow-y:scroll;">
    <?php foreach($allclientes as $cliente) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
        <?php echo $cliente->id; ?> -
        <?php echo $cliente->nombre; ?> -
        <?php echo $cliente->apellido; ?> -
        <?php echo $cliente->email; ?>
        <div class="right">
            <a href="<?php echo $helper->url("cliente","borrar"); ?>&id=<?php echo $cliente->id; ?>" class="btn btn-danger">Borrar</a>
        </div>
        <hr/>
    <?php } ?>
</section>
<footer class="col-lg-12">
    <hr/>
    Ejemplo PHP MySQLi POO MVC - Víctor Robles - <a href="http://victorroblesweb.es">victorroblesweb.es</a> - Copyright &copy; <?php echo  date("Y"); ?>
</footer>
</body>
</html>


