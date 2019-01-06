<?php
  $x1 = $_GET["x1"];
  $x2 = $_GET["x2"];
  $do = $_GET["do"];




  if($do == "+"){
   $result = $x1 + $x2;
 }elseif ($do == "-") {
   $result = $x1 - $x2;
 }elseif ($do == "*") {
   $result = $x1 * $x2;
 }elseif ($do == "/") {
   $result = $x1 / $x2;
  }

  $final = $x1." ".$do." ".$x2." "."="." ".$result;

  ?>
