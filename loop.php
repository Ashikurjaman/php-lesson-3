<?php
// for loop

// for ($i = 1; $i < 100; $i++) {
//     // echo $i;
//     echo PHP_EOL;
//     for ($j = 0; $j < $i; $j++) {
//         //echo "*";

//     }
// }

echo PHP_EOL;

// $i = 1;
// while($i<10){
//     $i++;
//     // echo $i;
//     echo PHP_EOL;
// }
// echo PHP_EOL;
// $i = 0;
// do {
//     $i++;
//     // echo $i.PHP_EOL;
// } while ($i < 10);



// multiple stepping

for($i=10,$j=1; $i>0;$i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}
