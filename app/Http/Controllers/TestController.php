<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class TestController extends Controller
{
    public function test1(){
    	$pages = Page::all();
    	foreach ($pages as $page) {
    		echo "$page->name / $page->description <br>";
    	}

    }
}
