<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs;

class TestController extends Controller
{
    public function index(){
    	$text= "siapa saja dapat makan";
    	$men = new Libs();//
    	return $men->metal($text);
    }
}
