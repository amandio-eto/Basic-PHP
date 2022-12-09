<?php


function foo(){

    echo "Foo" . PHP_EOL;
}

function bar(){

    echo "Bar" . PHP_EOL;
}

$functionfoo = "foo";
$functionbar = "bar";

echo  $functionfoo();
echo $functionbar();