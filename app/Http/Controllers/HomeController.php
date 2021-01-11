<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index(){

    	$pages = Page::all();
    	$pageDetails = Page::whereId(1)->first();
    	return view('website.home', ['pages' => $pages, 'pageDetails' => $pageDetails]);
    }

     public function page($id){

    	$pages = Page::all();
    	$pageDetails = Page::whereId($id)->first();
    	return view('website.home', ['pages' => $pages, 'pageDetails' => $pageDetails]);
    }
}
