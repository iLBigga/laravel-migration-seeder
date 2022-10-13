<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy('orario_partenza')->get();
        // dump($trains);
        return view('home', compact('trains'));
    }
}
