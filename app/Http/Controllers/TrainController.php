<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('orario_di_partenza', today())->get();
        $data = [
            'trains' => $trains
        ];
        return view('home', $data);
    }
}

