<?php



function countValue($array, $value): int
{
    $count = 0;

    for ($i = 0 ; $i < count($array) ; $i++){
        if ($array[$i] == $value){
            $count++;
        }
    }
    return $count;
}
$nums = [-2, 0,9,5,30,5, 7, 9, -5, 30, 100];


foreach ($nums as $num) {
    echo $num . " ";
}
echo "<br>";
echo countValue($nums,9);
