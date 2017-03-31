<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show($id = 0)
    {

        $json = file_get_contents(__DIR__ . '/../../../../database/db.json');
        $json_decode = json_decode($json, true);

        $title = $json_decode[0]['pages'][$id]['title'];
        $content = $json_decode[0]['pages'][$id]['content'];

        return view('pages.page', compact('title', 'content', 'time'));
    }
}