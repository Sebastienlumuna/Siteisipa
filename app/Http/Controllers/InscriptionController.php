<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InscriptionController extends Controller
{
   public function inscriptionview():View
   {
    return view('Pages.inscription');
   }
}
