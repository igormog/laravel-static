<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\DB\JsonDB;
use App\Models\Page;

class PagesController extends Controller
{
    public function show($id = 0)
    {

        $page = Page::getPage($id);
        $title = $page['title'];
        $content = $page['content'];

//        ## Write
//        $json_decode[0]['pages'][0]['content'] = 'Page 1 - test content ' . md5(rand(1000, 10000));
//        JsonDB::setData($json_decode);


        return view('pages.page', compact('title', 'content', 'time'));
    }
}