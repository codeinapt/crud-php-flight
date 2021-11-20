<?php

require 'flight/Flight.php';

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

Flight::start();




?>