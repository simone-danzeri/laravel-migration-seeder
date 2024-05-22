<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('in_orario', 1)->get();
        $data = [
            'trains' => $trains
        ];
        return view('home', $data);
    }
}
