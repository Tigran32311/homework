<?php

//Создание массива случайных чисел
$random_arr = range(0,100);
//shuffle($random_arr);
//Время начала программы
$time_start = microtime(true);

/**
 * Реализация последовательного поиска
 * @param array $arr Массив значений
 * @param $find Значение которое необходимо найти
 * @return string Сообщение об результате поиска
 */
function line_search(array $arr, $find)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] == $find) {
            return 'Ключ необходимого знаения: '.$i;
        }
    }
    return 'Элемент не найден';
}

//echo line_search($random_arr,124);

/**
 * Функция реализующая индексно-последовательный поиск
 * @param $arr Отсортированный массив
 * @param $n Количество значений в заданном массиве
 * @param $k Элемент, который необходимо найти
 * @return void
 */
function indexedSequentialSearch($arr, $n, $k)
{
    $elements = array();
    $indices = array();
    $temp = array();
    $j = 0; $ind = 0; $start=0; $end=0; $set = 0;
    for ($i = 0; $i < $n; $i += 3)
    {

        $elements[$ind] = $arr[$i];

        $indices[$ind] = $i;
        $ind++;
    }

    if ($k < $elements[0])
    {
        echo "Not found";

    }
    else
    {
        for ($i = 1; $i <=$ind; $i++)
            if ($k < $elements[$i])
            {
                $start = $indices[$i - 1];
                $set = 1;
                $end = $indices[$i];
                break;
            }
    }
    if($set == 1)
    {
        $start = $indices[$i-1];
        $end = $n;
    }
    for ($i = $start; $i <=$end; $i++)
    {
        if ($k == $arr[$i])
        {
            $j = 1;
            break;
        }
    }
    if ($j == 1)
        echo "Found at index ", $i;
    else
        echo "Not found";
}

//indexedSequentialSearch($random_arr,count($random_arr)-1,25);

/**
 * Функция реализующая бинарный поиск
 * @param array $arr Отсортированный массив
 * @param $x Элемент, который необходимо найти
 * @return bool Возвращаемое значение
 */
function binarySearch(Array $arr, $x)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {

        $mid = floor(($low + $high) / 2);

        if($arr[$mid] == $x) {
            return true;
        }

        if ($x < $arr[$mid]) {
            $high = $mid -1;
        }
        else {
            $low = $mid + 1;
        }
    }

    return false;
}
//Вызов функции бинарного поиска
/*$find = 101;
if (binarySearch($random_arr, $find) == true) {
    echo $find.' Найден';
} else {
    echo 'Не найден';
}*/

$time_end = microtime(true);
$time = $time_end - $time_start;
echo '<br>'.$time;