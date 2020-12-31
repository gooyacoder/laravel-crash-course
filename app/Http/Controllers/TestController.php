<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class TestController extends Controller
{
    public function test1(){
    	$pages = Page::whereId(2)->first();
    	return view('website.test1', ['pages' => $pages]);

    }
}
