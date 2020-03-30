<?php
//Registra a função dada como implementação de __autoload()
spl_autoload_register(function($class_name){
   
    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";
    if(file_exists(($filename))){
        require_once($filename);
    }
});