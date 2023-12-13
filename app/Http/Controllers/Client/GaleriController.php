<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
      $galery = Galeri::latest()->get();

      return view ('clients.galeri', compact('galery'));
    }
}
