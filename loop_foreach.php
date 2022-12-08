<?php

$data =[
    [
        "name"=>"Jose Amandio de Almeida",
        "age" =>23,
        "date" =>"02-10-1999"
],
   
[
    "name"=> "Antonio",
    "age"=> 100,
    "date"=> "13-06-2002"
]
];
    
    foreach($data as $get){
    echo "My Name Is"." ".$get['name'].PHP_EOL;
    echo "My age Is"." ".$get['age'].PHP_EOL;
    echo "My Date Is"." ".$get['date'].PHP_EOL;
    }