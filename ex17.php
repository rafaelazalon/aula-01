<?php

 $val_1 = 1;
 $val_2 = 2;
 $val_3 = 3;

 if( $val_1 < $val_2 ){
  $val_1 += 3;
 }

 if( $val_2 < $val_3 && $val_1 > $val_3 ){
  $val_1 += 1;
 }

 echo $val_1;
?>