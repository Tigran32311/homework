<?php
namespace classes\interfaces;
//интерфейс, в котором объявляется функция подсчета скидок
interface IDiscounts
{
    public function getDiscount(AllCars $car);
}