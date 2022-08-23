<?php

function dd($input){
    var_dump($input); //mostra o vlaor da  variavel 
    die();
}
function view($input){
   echo json_encode($input);
}