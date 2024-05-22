<?php

function dd($value){
    return var_dump($value);
}

function error(){
    http_response_code(404);
    require "controllers/error.php";
}