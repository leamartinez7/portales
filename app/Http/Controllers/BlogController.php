<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $entradas = Entrada::latest()->paginate(9);
        return view('blog', compact('entradas'));
    }
}

