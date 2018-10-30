<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {

    	$usuarios = [
    		'Carlos',
    		'Pedro',
    		'Felipe',
    		'Alexander',
    		'Jose',
    		'Albert'
    	];
    	return view('User',compact('usuarios'));
    }
}
