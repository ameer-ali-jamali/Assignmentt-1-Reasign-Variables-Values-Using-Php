<?php

$a="A";
$b="B";
$c="C";
$d="D";

$b=$a;
$a=$b;
$c=$d;
$d=$c;


// echo $a,$b,$c,$d;
print($a);
