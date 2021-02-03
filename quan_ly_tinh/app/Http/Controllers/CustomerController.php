<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create(){
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }
}
