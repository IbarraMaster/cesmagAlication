<?php
    include 'index.php';
    include 'conexion.php';
?>

<div class="container">
    <!-- Default form contact -->
<form class="text-center border border-light p-5" action="registrarFac.php" method="POST">

    <!-- COdigo -->
    <input type="text" id="codigoFac" name="codigoFac" class="form-control mb-4" placeholder="Codigo">

    <!-- Nombre -->
    <input type="text" id="nombreFac" name="nombreFac" class="form-control mb-4" placeholder="Nombre">




    <!-- Copy -->


    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Enviar</button>
</form>
<!-- Default form contact -->   

</div>