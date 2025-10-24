<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    

    public function store(Request $request)
    {
        $selected = $request->input('transporte');
        return view('transport-result', compact('selected'));
    }


}
