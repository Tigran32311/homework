<?php

require_once __DIR__.'\vendor\autoload.php';

use classes\{ListUsers,Request};

var_dump($_REQUEST);

$request = new Request($_REQUEST);

$id=$request->getInfo("id");
$name=$request->getInfo("name");
$age=$request->getInfo("age");

$user = new ListUsers($id,$name,$age);

$request->setInfo($user->getArrUsers());

/*$_REQUEST = $_POST;
var_dump($_POST);
$arr[]= $_POST;
var_dump($arr);
echo '123123';*/