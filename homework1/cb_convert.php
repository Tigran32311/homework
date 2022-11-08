<?php error_reporting(-1);
    //подключение автозагрузчика классов
    require_once __DIR__.'/vendor/autoload.php';


/**
 *Расширение класса Exception для обработки данных для конвертации валют
 */
class ConvertException extends Exception
{

}


/**
 * Функция для конвертации валют при помощи подключения api от ЦБ. Для подключения используется guzzle
 * @param string $valute параметр содержащий тип валюты
 * @param float $number параметр содержащий число для конвертации в рубли
 * @return float возвращающее значение
 * @throws \GuzzleHttp\Exception\GuzzleException исключение для созданного объекта guzzle
 */
function converter(string $valute,float $number)
{
            $client = new \GuzzleHttp\Client([
                'base_uri' => 'https://www.cbr-xml-daily.ru/daily_json.js'
            ]);
            $response = $client->request('GET');
            $body = $response->getBody();
            $arr_body = json_decode($body, 1);
            $res = $arr_body['Valute'][$valute]['Value'] * $number;
            return $res;
}

//Обработка запроса с формы, вызов функции для конвертации валюты и вывод на html страницу
if (isset($_GET['valute'])&&isset($_GET['number'])) {
    try {
        if ($_GET['number'] < 0) {
            throw new ConvertException("Некорректные данные");
        } else {
            echo converter($_GET['valute'], $_GET['number']);
        }
    } catch (ConvertException $e) {
        echo $e->getMessage();
    }
}