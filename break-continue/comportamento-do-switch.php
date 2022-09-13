<?php
$i = 0;
while ($i++ < 4) {
    switch ($i) {
         case 1:
               echo $i . "a\n";
               continue;
               echo $i . "b\n";
         case 2:
               echo $i . "c\n";
               continue 2;
               echo $i . "d\n";
         case 3:
               echo $i . "e\n";
               break;
               echo $i . "f\n";
         case 4:
               echo $i . "g\n";
               break 2;
               echo $i . "h\n";
   }
   echo "X\n";
}

?>