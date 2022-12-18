<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Remainder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RemainderController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store_remainder(Request $request){
        $request->validate([
            'nama_obat' => 'required',
            'amount' => 'required|min:1',
            'kalender' => 'required'
        ]);

        Remainder::create([
            'nama_obat' => $request->nama_obat,
            'amount' => $request->amount,
            'kalender' => $request->kalender
        ]);

        return redirect('/');
    }

    
}
