<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Remainder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NoteController extends Controller
{     
    
    public function add_note(Request $request){

        $request->validate([
            'aturan_pemakaian' => 'required'
        ]);

        Note::create([
            'aturan_pemakaian' => $request->aturan_pemakaian
        ]);
        

        return Redirect::back();
    }
}
