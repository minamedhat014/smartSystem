<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class offersController extends Controller
{
    public function index(){
        return view('admin.products.offers');
    }
}
