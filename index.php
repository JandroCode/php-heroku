<?php


echo 'Hola Heroku';


$con = mysqli_connect('bqj2gugwnfj3zkf5agyj-mysql.services.clever-cloud.com','uj1rpm7iqaaivv7f','iykF3R0e8ksfyjPEEHjy');

if($con){
    echo 'Conectado a la base de datos de Clever Cloud';
}