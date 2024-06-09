<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataSensor = DataSensor::orderBy('created_at','desc')->get();
        return view('content.dashboard.index', compact('dataSensor'));
    }
}
