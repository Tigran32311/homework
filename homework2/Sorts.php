<?php
//Создание массива случайных чисел
$random_arr = range(0,100);
shuffle($random_arr);
//Время начала программы
$time_start = microtime(true);

/**
 * Функция реализующая алгоритм пузырьковой сортировки
 * @param array $arr Неотсортированный массив чисел
 * @return array Возвращаемое значение массив
 */
function bubble_sort(array $arr): array
{
    $k=0;
    for ($i = 0; $i < count($arr)-1; $i++) {
        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $k = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $k;
            }
        }
    }
    return $arr;
}

//print_r( bubble_sort($random_arr));

/**
 * Функция реализующая алгоритм сортировки вставками
 * @param array $arr Неотсортированный массив чисел
 * @return array Возвращаемое значение массив
 */
function insertion_sort(array $arr): array
{
    for ($i = 1; $i < count($arr); $i++) {
        $k = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $k) {
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $k;
    }
    return $arr;
}

//print_r( insertion_sort($random_arr));

/**
 * Функция реализующая алгоритм сортировку слиянием
 * @param array $arr Неотсортированный массив чисел
 * @return array Возвращаемое значение массив
 */
function mergeSort(array $arr) : array {
	if (count($arr) < 2) {
        return $arr;
    }
	$middle = floor(count($arr) / 2);
	$left = array_slice($arr,0, $middle);
	$right = array_slice($arr,$middle,count($arr)-$middle);
	return mergeArr(mergeSort($left), mergeSort($right));
}

/**
 * Функция вызываемая рекурсивно функцией mergeSort
 * @param array $left массив для сортировки левой стороны массива
 * @param array $right массив для сортировки правой стороны массива
 * @return array
 */
function mergeArr(array $left, array $right) : array {
    $res = [];
    while (count($left) > 0 && count($right) > 0) {
        if($left[0] <= $right[0]){
            array_push($res,array_shift($left));
        }else{
            array_push($res,array_shift($right));
        }
    }

    while(count($left)){
        array_push($res,array_shift($left));
    }
    while (count($right)){
        array_push($res,array_shift($right));
    }
    return $res;
}

//print_r( mergeSort($random_arr));

/**
 * Функция помогающая реализовать алгоритм быстрой сортировки ( разбиение )
 * @param array $arr Неотсортированный массив чисел
 * @param int $start
 * @param int $end
 * @return int
 */
function partition(array &$arr, int $start, int $end)
{
    $pivot = $arr[$end];

    $pIndex = $start;

    for ($i = $start; $i < $end; $i++) {
        if ($arr[$i] <= $pivot) {
            $k = $arr[$i];
            $arr[$i]=$arr[$pIndex];
            $arr[$pIndex]=$k;
            $pIndex++;
        }
    }
    $k = $arr[$end];
    $arr[$end] = $arr[$pIndex];
    $arr[$pIndex]=$k;
    return $pIndex;
}

/**
 * Функция реализующая алгоритм быстрой сортировки
 * @param array $arr Неотсортированный массив чисел
 * @param int $start Начало массива
 * @param int $end Конец массива
 * @return array|void Возвращаемое значение
 */
function quick_sort(array &$arr, int $start, int $end)
{
    if ($start >= $end) {
            return;
    }

    $pivot = partition($arr,$start,$end);
    quick_sort($arr,$start,$pivot-1);
    quick_sort($arr,$pivot+1,$end);
    return $arr;
}

//print_r( quick_sort($random_arr,0,100));

/**
 * Функция реализующая алгоритм сортировки выбором
 * @param array $arr Неотсортированный массив чисел
 * @return array Возвращаемое значение
 */
function selection_sort(array $arr) :array
{
    for ($i = 0; $i < count($arr) - 1; ++$i) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); ++$j) {
            if ($arr[$j] < $arr[$min]) {
                $min=$j;
            }
        }
        $k=$arr[$i];
        $arr[$i]=$arr[$min];
        $arr[$min]=$k;
    }
    return $arr;
}
//print_r( selection_sort($random_arr));

//Подсчет конца выполнения программы
$time_end = microtime(true);
$time = $time_end - $time_start;
echo '<br>'.$time;