<?php
function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

function fab(int $X)
{
    $result = 1;
    for ($i = $X; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

function serve($products, $qu = 4)
{
    echo "{$qu} item {$products} are served";
}

function printN($i)
{
    if ($i >= 10) {
        return;

    }
    echo $i . "\n";

    $i++;
    printN($i);
}

printN(1);

function printnumber($start, $end)
{
    if ($start > $end) {
        return;
    }
    echo $start . "\n";

    $start++;
    printnumber($start, $end);

}

function fabonacci($old, $start, $new, $end)
{

    // static $start;
    // $start = $start ?? 1;

    if ($start > $end) {
        return;
    }
    $start++;
    echo $old . "\n";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fabonacci($old, $start, $new, $end);
}




function check_even_odd($number) {
  if($number % 2 == 0) {
    return 'Even';
  } else {
    return 'Odd';
  }
}

$number = 19;
echo check_even_odd($number); 

