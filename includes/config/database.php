<?php 
function conectarDB() {
    $bd = mysqli_connect('localhost', 'root', 'root', 'bienesraices');
    if (!$bd) {
        echo 'ERROR. NO SE PUDO CONECTAR';
        exit;
    } 
    return $bd;
}