<?php
$x = 75;

function myfunction() {

    
    echo $GLOBALS['x'];  //either this or
    global $x;           //this
    echo $x;
  }


myfunction()
?>