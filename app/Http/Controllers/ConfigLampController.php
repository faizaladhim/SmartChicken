<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigLampController extends Controller
{
    public function index()
    {
        return view('content.config.lamp.index');
    }

    public function update(Request $request)
    {
        # code...
    }
}
