<?php
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$pontoA = 0;
$pontoB = 0;
$pontoC = 0;
$pontoD = 0;

if($a1>$b1){
    $pontoA = $pontoA + 3;
}
elseif($a1<$b1){
    $pontoB = $pontoB + 3;
}
else{
    $pontoA = $pontoA + 1;
    $pontoB = $pontoB + 1;
}

if($c1>$d1){
    $pontoC = $pontoC + 3;
}
elseif($c1<$d1){
    $pontoD = $pontoD + 3;
}
else{
    $pontoC = $pontoC + 1;
    $pontoD = $pontoD + 1;
}

echo $pontoA;
echo $pontoB;
echo $pontoC;
echo $pontoD;