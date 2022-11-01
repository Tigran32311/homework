<?php
namespace classes;
//абстрактный класс, который объединяет свойства грузовых и легковых автомобилей
abstract class AllCars
{
    public string $brand;
    public string $model;
    public int $maxspeed;
    public float $cost;
}