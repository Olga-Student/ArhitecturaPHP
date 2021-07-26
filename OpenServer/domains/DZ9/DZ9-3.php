<?php
/**
Подсчитать практически количество шагов при поиске
описанными в методичке алгоритмами. */

$arr = range(1, 100000);

function LinearSearch ($arr, $num) {
    $count = count($arr);
    $sum = 0;
    for ($i=0; $i < $count; $i++) {
        $sum += $i;
        echo $sum.PHP_EOL;
        if ($arr[$i] == $num) return $i;

        elseif ($arr[$i] > $num) return null;
    }
    return null;
}
const NUM = 5000;
echo "Линейный поиск".PHP_EOL;
echo LinearSearch($arr, NUM).PHP_EOL;// 4999


function binarySearch ($myArray, $num) {

//определяем границы массива
    $left = 0;
    $right = count($myArray) - 1;
    $n = 0;
    while ($left <= $right) {
      $n++;
//находим центральный элемент с округлением индекса в меньшую сторону
        $middle = floor(($right + $left)/2);
//если центральный элемент и есть искомый
        if ($myArray[$middle] == $num) {
            echo 'Количество итераций'.$n;
            return $middle;
        }
        elseif ($myArray[$middle] > $num) {
//сдвигаем границы массива до диапазона от left до middle-1
            $right = $middle - 1;
        }
        elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
    }
    return null;
}
const NUM = 3000;
echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;
