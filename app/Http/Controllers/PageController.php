<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {
        $trains = Train::where('departure_time', '>=', now())->orderBy('departure_time', 'asc')->get();
        // dd($trains);
        return view("index", compact("trains"));
    }
}
