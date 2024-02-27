<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    public function showDate($date)
    {
        $trains = Train::where('departure_time','like', $date)->get();
        return view('welcome', compact('trains'));
    }

}
