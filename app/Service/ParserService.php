<?php

namespace App\Service;

use DiDom\Document;

class ParserService
{
    public function parser($path = 'public/xml/data.xml')
    {
        $document = new Document(base_path($path), true);

        $xml = simplexml_load_string($document);
        $json = json_encode($xml); // не передает значения CDATA
        $data = json_decode($json, TRUE)['body']['vehicles'];

        $withoutArray = array();
        $equipmentArray = array();
        $notNone = array();
        foreach ($data as $listArray) {
            foreach ($listArray as $oneArray) {

                // получает только значения без массивов для записи в таблицу basic
                $withoutArray[$oneArray['id']] = array_filter($oneArray, function ($element) {
                    return !is_array($element);
                });

                // отсеивает пустые массивы // не используется
                $notNone[$oneArray['id']] = array_filter($oneArray, function ($element) {
                    return !empty($element);
                });

                // получает массивы по ключу equipment // не используется
                if (array_key_exists('equipment', $notNone[$oneArray['id']])) {
                    $equipmentArray[$oneArray['id']] = $oneArray['equipment'];
                };

                // echo "<pre>";
                // print_r($notNone);
                // echo "</pre>";

            }
        }

        return $withoutArray;
    }
}
