<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function about(){
    	return view('pages.about');
    }

    public function services(){
    	$data = array(
    		'title' => 'Services', 
    		'skills' => ['Web Design', 'Vue.js', 'Laravel 5']
    	);
    	return view('pages.services')->with($data);
    }
}
