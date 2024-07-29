<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create_view()
    {
        return view('create_product');
    }

    function create(Request $request)
    {

        dd($request);
    }
}
