<?php

$data = [
    "name" => "Jose Amandio de Almeida"
];


if(isset($data['name'])){
    echo "My Name Is"." ".$data['name'];
}else{
    echo "No Data";
    
}