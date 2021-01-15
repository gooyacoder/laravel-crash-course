<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Mail;

class ContactUsController extends Controller
{
    public function index(){

    	$pages = Page::all();

    	return view('website.contactus', ['pages' => $pages]);

    }

    public function sendMessage(Request $request){

    	$input = $request->all();

    	$pages = Page::all();

    	$validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    	]);

    	Mail::send('mails.contactusmail', ['nameInput' => $input['name'], 'messageInput' => 
    		$input['message']], function($message){
    			$message->from('gooyagraphics@gmail.com', 'Amirhosein Mahdiyar');
    			$message->to('gooyacoder@gmail.com');
    		});

    	return view('website.contactus', ['pages' => $pages])->with('successMessage', 
    		'The Email was Sent Successfully.');
    	
    }
}
