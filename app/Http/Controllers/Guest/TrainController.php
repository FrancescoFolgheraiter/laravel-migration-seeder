<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
    public function showDate($date)
    {
        $trains = Train::whereDate('departure_time','LIKE', $date)->get();
        return view('train.showToday', compact('trains'));
    }

}
