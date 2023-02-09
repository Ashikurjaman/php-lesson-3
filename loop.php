<?php

include_once "function.php";
// for loop

for ($i = 1; $i < 100; $i++) {
    // echo $i;
    echo PHP_EOL;
    for ($j = 0; $j < $i; $j++) {
        echo "*";

    }
}

echo PHP_EOL;

$i = 1;
while($i<10){
    $i++;
    // echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;
$i = 0;
do {
    $i++;
    // echo $i.PHP_EOL;
} while ($i < 10);



// // multiple stepping

for($i=10,$j=1; $i>0;$i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}


for($i=1,$j=1; $i<100; $i+=7,$j+=11){
    print $i."\n";
    echo $j<100 ? $j."\n" : "";

}
            // how to change sum value and add sum value;
$sum= 0;
for($i=1;$i<=30;$i++){
    $sum+=$i;
}

// echo $sum;

echo PHP_EOL;

            //    factorial calculation 
/* $x=6;
$n=1;
for($i=1;$i<=$x-1;$i++){
    $n*=($i+1);
   

}
echo $n; */


// continue and break 

/* for($i=0;$i<10;$i++){
    if($i==6){
        continue;
    }
    print $i;
    print PHP_EOL; // php end of the line
} */


/* $veryOld=0;
$old=1;
$new=1;
for ($i=0; $i <10 ; $i++) { 
    echo $veryOld. PHP_EOL;
    $old = $new;
    $new= $new + $veryOld;
    $veryOld = $old; 
} */


$num=14;
if(isEven($num)){
    echo "$num is a even number";
}else{
    echo "$num is a odd number";
}