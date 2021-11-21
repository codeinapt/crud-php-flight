<?php

require 'flight/Flight.php';

Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=crud','root',''));

Flight::route('/', function(){
    Flight::render('cabecera');
    Flight::render('proyectos/listar');
    Flight::render('pie');
});
Flight::route('GET /crear', function(){
    Flight::render('cabecera');
    Flight::render('proyectos/crear');
    Flight::render('pie');
});
Flight::route('POST /crear', function(){
    $txtNombre= Flight::request()->data->txtNombre;
    $archivo= Flight::request()->files['txtImagen'];
    print_r($txtNombre);
    print_r($archivo);
    
    $sql="INSERT INTO proyectos (nombre,imagen) VALUE(?,?);";
    
    $ejecutarSentencia= Flight::db()->prepare($sql);
    
    $ejecutarSentencia->bindParam(1,$txtNombre);
    $ejecutarSentencia->bindParam(2,$archivo['name']);
    $ejecutarSentencia->execute();
    
});

Flight::start();




?>