<?php

require "function.php";
require "database.php";

$url = $_SERVER['REQUEST_URI'];


// if($url === '/') {
//     require "controllers/index.php";
// }elseif ($url === '/about') {
//     require "controllers/about.php";
// }elseif ($url === '/contact'){
//     require "controllers/contact.php";
// }else{
//     echo "404 Not Found";
// }



$url = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
'/' => 'controllers/index.php',
'/about' => 'controllers/about.php',
'/contact' => 'controllers/contact.php',
'/testing' => 'controllers/testing.php',
'/notes'  => 'controllers/note.php'
];

if(array_key_exists($url, $routes)){
    
    require $routes[$url];
}else{
    error();
}




 
