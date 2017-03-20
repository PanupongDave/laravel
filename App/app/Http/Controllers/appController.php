<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    //
    public function index(){
    	$data = [
    		'first_name' => 'Panupong',
    		'last_name' => 'Chamsomboon'
    	];

    	return view('index',$data);
    }
    public function index2(){
      return view('index');
    }
}
