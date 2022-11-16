<?php

namespace classes;

/**
 *Класс для получения обработки данных из форм
 */
class ListUsers
{

    private ?int $id;
    private ?string $name;
    private ?int $age;
    private ?array $arrUsers;
    /**
     * Конструктор
     * @param int $Id
     * @param string $Name
     * @param int $Age
     * @return void
     */
    public function __construct(int $Id, string $Name, int $Age)
    {
        $this->id=$Id;
        $this->name=$Name;
        $this->age=$Age;
    }

    /**
     * Функция получения возраста
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Функция получения имени
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Функция получения идентификатора
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getArrUsers(): array
    {
        $this->arrUsers['id']=$this->id;
        $this->arrUsers['name']=$this->name;
        $this->arrUsers['age']=$this->age;
        return $this->arrUsers;
    }

}