<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
      // $about = About::all();
      $pengurusData = Pengurus ::all();

      // dd($pengurusData);
      return view ('clients.about', compact('pengurusData'));
    }
}
