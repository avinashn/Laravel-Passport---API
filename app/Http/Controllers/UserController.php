<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class UserController extends Controller
{
    public function index(){
    	$user = Detail::all();
    	return $user;
    }
}
