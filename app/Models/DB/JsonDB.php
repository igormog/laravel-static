<?php

namespace App\Models\DB;

class JsonDB
{
    public static $db = __DIR__ . '/../../../database/db.json';

    public static function getData()
    {
        $json = file_get_contents(self::$db);
        $json_decode = json_decode($json, true);
        return $json_decode;
    }

    public static function setData($json)
    {
        $json_encode = json_encode($json);

        $file = fopen(self::$db, "w") or die("Unable to open file!");
        if (fwrite($file, $json_encode)) {
            $action = true;
        } else {
            $action = false;
        }

        fclose($file);
        return $action;
    }
}