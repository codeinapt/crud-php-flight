<?php

require 'flight/Flight.php';

Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=crud','root',''));

// Mostrar informacion guardad en la vista index
Flight::route('/', function(){

    $sql="SELECT * FROM proyectos";
    $ejecutarSentencia= Flight::db()->prepare($sql);
    $ejecutarSentencia->execute();
    
    $datosProyectos=$ejecutarSentencia->fetchAll();

    Flight::render('cabecera');
    Flight::render('proyectos/listar', array('proyectos'=>$datosProyectos));
    Flight::render('pie');
});
// Ruta para redireccionamiento a la vista de agregar nuevos datos
// Route for direction in view of adding new data
Flight::route('GET /crear', function(){
    Flight::render('cabecera');
    Flight::render('proyectos/crear');
    Flight::render('pie');
});

// Insertar información en la base de datos por medio de el metodo Post
Flight::route('POST /crear', function(){
    $txtNombre= Flight::request()->data->txtNombre;
    $archivo= Flight::request()->files['txtImagen'];
 
    
    $sql="INSERT INTO proyectos (nombre,imagen) VALUE(?,?);";
    
    $ejecutarSentencia= Flight::db()->prepare($sql);
    
    $ejecutarSentencia->bindParam(1,$txtNombre);
    $ejecutarSentencia->bindParam(2,$archivo['name']);
    $ejecutarSentencia->execute();
    
});

// Recepcionar informacion po medio de el metodo POST para ser eliminada
Flight::route('POST /borrar', function(){
    
    $txtID=Flight::request()->data->txtID;
    print_r($txtID);
});

Flight::start();




?>