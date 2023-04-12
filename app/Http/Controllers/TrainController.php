<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::today();
        $trains = Train::where('departure_time', '>=', $today)->orderBy('departure_time')->get();
        return view('home', compact('trains'));
    }
}

