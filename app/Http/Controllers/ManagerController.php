<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create()
    {
        return view('create_product');
    }
}
