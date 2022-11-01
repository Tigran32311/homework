<?php
//подключение классов через namespace
use classes\Truck;
use classes\Car;
use classes\DbQueries;

//функция для загрузки классов
function autoloader($class)
{
    //функция для изменения слэшей в путях, чтобы код срабатывал и в UNIX системах
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

//использование встроенной функции php для подключения загрузчика классов
spl_autoload_register('autoloader');

//Подключение к базе данных
$dbh = new DbQueries();

//вывод списка машин или грузовиков
if ($_GET['text']=='car') {
    echo '<pre>';
    print_r($dbh->getCarsList());
    echo '</pre>';
} elseif ($_GET['text']=='truck') {
    echo '<pre>';
    print_r($dbh->getTrucksList());
    echo '</pre>';
}

//выполнение запроса на добавление автомобиля
if (!empty($_POST)&&$_POST['choose_car']=='car') {
    var_dump($_POST);
    $car = new Car($_POST['brand'], $_POST['model'], $_POST['maxspeed'],$_POST['climat'],$_POST['cost']);
    $car->getDiscount($car);
    $query = $dbh->insertCar($car);
} else if (!empty($_POST) && $_POST['choose_car'] == 'truck') { //выполнение запроса на добавление грузовика
    $truck = new Truck($_POST['brand'], $_POST['model'], $_POST['maxspeed'],$_POST['loadCapacity'],$_POST['cost']);
    $truck->getDiscount($truck);
    $query = $dbh->insertTruck($truck);
}