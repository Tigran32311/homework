<?php

namespace classes;

/**
 *Класс для обработки запросов, и отправки куки
 */
class Request
{
    private array $req;

    public function __construct(array $request)
    {
        $this->req = $request;
    }

    public function getInfo(string $key)
    {
        return $this->req[$key];
    }

    public function setInfo(array $info)
    {
        foreach ($info as $key=>$item) {
            setcookie($key,$item);
        }
    }
}