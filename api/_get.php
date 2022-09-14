<?php
include("../libs/classes.php");

$obj = new Csv2Json;

print_r($obj->convert("../arquivo.csv"));



?>