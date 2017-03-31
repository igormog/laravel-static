<?php

namespace App\Models;

use App\Models\DB\JsonDB;

class Page extends JsonDB
{
    public static function getPage($id)
    {
        $json_decode = JsonDB::getData();
        $page = $json_decode[0]['pages'][$id];
        return $page;
    }
}