<?php
namespace classes;

use classes\interfaces\IDiscounts;
//класс для легковых автомобилей
class Car extends AllCars implements IDiscounts
{
    //свойство отвечающее за наличие климат контроля
    public int $climat;

    public function __construct($brand, $model, $maxspeed, $climat=0, $cost)
    {
        $this->brand=$brand;
        $this->model=$model;
        $this->maxspeed=$maxspeed;
        $this->climat=$climat;
        $this->cost=$cost;
    }
    public function getDiscount($car)
    {
        //скидка на машины с климат контролем 30%
        if ($this->climat==1) {
            $this->cost *= 0.7;
        }
    }
}