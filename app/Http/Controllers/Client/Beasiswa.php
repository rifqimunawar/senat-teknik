<?php

namespace App\Http\Controllers\Client;

use App\Models\Beasiswa as BeasiswaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Beasiswa extends Controller
{
    public function index (){
      $beasiswa = BeasiswaModel :: latest()->get();
      return view ('clients.beasiswa', compact('beasiswa'));
    }

    public function show($id){
      $beasiswa = BeasiswaModel :: find($id);
      return view ('clients.beasiswaShow', compact('beasiswa'));
    }
}
