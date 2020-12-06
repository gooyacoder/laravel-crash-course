<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
     return view('welcome');

    // try{
    // 	DB::connection()->getPdo();
    	
    // 	echo "Database Connection Successful!";
    // }catch(\Exception $e){
    // 	die("Database Connection Failed! " . $e);
    // }
});

Route::get('test1', [TestController::class, 'test1']);


