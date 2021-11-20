<?php

require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'Welcome';
});

Flight::start();




?>