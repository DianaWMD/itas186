<?php

// function 1 no para
function upperName ($name) {
    echo strtoupper($name);
}

upperName('bill DoU');

echo "<hr>";

upperName('john doe');

echo "<hr>";
// function 2 - get date
function get_date() {
    echo date("l jS \of F Y h:i:s A");
}

get_date();
echo "<hr>";

// function 3 with return date
function get_date_with_return () {
    return date("l jS \of F Y h:i:s A");
}

function test_return () {
    return; // return '';
}

echo 'test_return should be :' . test_return() . '!!!!!';

// function scope

$name = 'Bob';

function test() {
    global $name, $var; // make name and var to global
    echo $name;
    echo "<br>";
    $var = 'contents';
    echo 'inside the function, $var = '.$var.'<br />';
}
   
test();
echo 'outside the function, $var = '.$var;

