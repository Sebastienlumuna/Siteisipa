<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class PagesController extends Controller
{

    public function index(): View
    {
        return view('pages.index');
    }

    public function apropos(): View
    {
        return view('pages.apropos');
    }

    public function programmes(): View
    {
        return view('pages.programmes');
    }
    public function etudiants(): View
    {
        return view('pages.etudiant');
    }
    public function filieres(): View
    {
        return view('pages.filieres');
    }
    public function contact(): View
    {
        return view('pages.contact');
    }

    // filieres
    public function infogestion(): View
    {
        return view('filieres.infogestion');
    }


    public function genilogiciel(): View
    {
        return view('Filieres.genilogiciel');
    }

    public function communication(): View
    {
        return view('Filieres.communication');
    }

    public function tm(): View
    {
        return view('Filieres.tm');
    }
    public function ia(): View
    {
        return view('Filieres.ia');
    }
    public function systemebdd(): View
    {
        return view('Filieres.systemebdd');
    }

    public function banque(): View
    {
        return view('Filieres.banque');
    }

    public function comptabilite(): View
    {
        return view('Filieres.comptabilite');
    }

    public function marketing(): View
    {
        return view('Filieres.marketing');
    }
    public function fiscalite(): View
    {
        return view('Filieres.fiscalite');
    }
    public function gfinanciere(): View
    {
        return view('Filieres.gfinanciere');
    }
}

