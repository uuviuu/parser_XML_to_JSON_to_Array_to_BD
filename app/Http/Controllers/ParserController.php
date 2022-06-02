<?php

namespace App\Http\Controllers;

use Parser;

class ParserController extends BaseController
{

    // получает элементы (без массивов) из xml и сохраняет их в бд
    public function index()
    {
        $withoutArray = Parser::parser();

        foreach ($withoutArray as $array) {
            $this->service->parser($array);
        }

        // echo "<pre>";
        // print_r($withoutArray);
        // echo "</pre>";
    }

    // получить только ключи // не используется
    public function onlyKey()
    {
        $onlyKey = array();
        foreach ($this->withoutArray as $array) {
            foreach (array_keys($array) as $key) {
                if (!in_array($key, $onlyKey)) {
                    $onlyKey[] = $key;
                }
            }
        }
        // echo "<pre>";
        // print_r($onlyKey);
        // echo "</pre>";
    }

    // получить только ID // не используется
    public function arrayID()
    {
        $arrayId = array();
        foreach ($this->withoutArray as $array) {
            $arrayId[] = $array['id'];
        }
        echo "<pre>";
        print_r($arrayId);
        echo "</pre>";
    }
}
