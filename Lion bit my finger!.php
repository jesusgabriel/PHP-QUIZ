<?php
  function isBitten() {
    $b = rand(1,2);
    $c = floor($b);
   if($c < 2){
     return '<h1>Lion bit your finger!</h1>';
   } else {
     return '<h1>Lion did not bit your finger!</h1>';
   }
 }
 echo '<br/>';
 echo isBitten();
 echo '<br/>';
 ?>
