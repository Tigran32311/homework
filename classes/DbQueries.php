<?php
namespace classes;

use PDO;
//класс для выполнения запросов к БД
class DbQueries
{
    private $db;
    //при создании объекта данного класса будет произведено подключение к БД
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=my_database','root','');
    }

    //функция для добавления в БД легкового автомобиля
    public function insertCar($param = [])
    {
        $res = $this->db->prepare("INSERT INTO cars (brand,model,maxspeed,climat,cost) VALUES (:brand, :model, :maxspeed, :climat, :cost)");

        if (!empty($param)) {
        foreach ($param as $key => $value) {
                $res->bindValue(":$key",$value);
            }
        }
        return $res->execute();
    }

    //функция для получения списков легковых автомобилей из БД
    public function getCarsList()
    {
        $res = $this->db->prepare("SELECT * FROM cars");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    //функция для добавления в БД грузового автомобиля
    public function insertTruck($param = [])
    {
        $res = $this->db->prepare("INSERT INTO trucks (brand,model,maxspeed,loadCapacity,cost) VALUES (:brand, :model, :maxspeed, :loadCapacity, :cost)");

        if (!empty($param)) {
            foreach ($param as $key => $value) {
                $res->bindValue(":$key",$value);
            }
        }
        return $res->execute();
    }

    //функция для получения списков грузовых автомобилей из БД
    public function getTrucksList()
    {
        $res = $this->db->prepare("SELECT * FROM trucks");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}