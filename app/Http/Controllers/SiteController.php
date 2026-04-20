<?php

namespace App\Http\Controllers;



class SiteController extends Controller
{
    public function index() {
$name = 'Joshua';
$habits = ['Ler', 'Correr', 'Estudar', 'Comer', 'MUAHAUAUHA'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
