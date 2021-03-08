<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:sans-serif;
        }
    </style>

</head>
<body>

<?php
    echo '<h1>Hola Heroku</h1>';
    $con = mysqli_connect('bqj2gugwnfj3zkf5agyj-mysql.services.clever-cloud.com','uj1rpm7iqaaivv7f','iykF3R0e8ksfyjPEEHjy');
    echo '<br>';
    
    if($con){
        echo '<h2>Conectado a la base de datos de Clever Cloud</h2>';
    }
?>
</body>
</html>




