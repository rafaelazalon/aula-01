<?php 
$i = 0;
while ($i++ < 3) {
    echo "3\n";
    while (1) {
        echo "2\n";
        while (1) {
            echo "1\n";
            continue 3;
        }
        echo "Essa linha nunca vai ser exibida\n";
    }
    echo "Nem essa linha\n";
}
?>