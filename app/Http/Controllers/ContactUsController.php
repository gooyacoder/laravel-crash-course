<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class ContactUsController extends Controller
{
    public function index(){

    	$pages = Page::all();

    	return view('website.contactus', ['pages' => $pages]);

    }

    public function sendMessage(Request $request){

    	$input = $request->all();

    	dd($input);
    	
    }
}
