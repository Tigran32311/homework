<?php
namespace classes;

use classes\interfaces\IDiscounts;
//класс для грузовых автомобилей
class Truck extends AllCars implements IDiscounts
{
    //свойство отвечающее за грузоподъемность грузовика
    public int $loadCapacity;

    public function __construct($brand, $model, $maxspeed, $loadCapacity,$cost)
    {
        $this->brand=$brand;
        $this->model=$model;
        $this->maxspeed=$maxspeed;
        $this->loadCapacity=$loadCapacity;
        $this->cost=$cost;
    }

    public function getDiscount($car)
    {
        //скидка на машины с грузоподъемностью выше 5 тонн 20%
        if ($this->loadCapacity > 5) {
            $this->cost *= 0.8;
        }
    }
}
