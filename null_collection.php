<?php

$data = [
    "name" => "Jose Amandio de Almeida"
];


if(isset($data['name'])){
    echo $data['name'].PHP_EOL;
}else{
    echo "No Data".PHP_EOL;
}

// or use can use Ternary Operator is Verry Simple;
$simple = $data['name'] ?? "No Data";
echo "$simple";