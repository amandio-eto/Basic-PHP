<?php 


function name(){
    
    echo "My Name : Jose Amandio de Almeida";   
}

function hello($name){

    echo "My Name Is $name".PHP_EOL;
}

echo name().PHP_EOL;
echo hello("Jose Amandio de Almeida");
function test( int $age)
{
    echo "My Name Is Age $age".PHP_EOL;
    
}

echo test(23);