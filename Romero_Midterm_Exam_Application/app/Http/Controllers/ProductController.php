<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $products = [
            ['title' => 'One Piece', 'director' => 'Eiichiro Oda'],
            ['title' => 'Bleach', 'director' => 'Tite Kubo'],
            ['title' => 'Naruto', 'director' => 'Masashi Kishimoto'],
            ['title' => 'Code Geass', 'director' => 'Gorō Taniguchi'],
            ['title' => 'Evangelion', 'director' => 'Hideaki Annoexi'],
            ['title' => 'Frieren', 'director' => 'Keiichiro Saito']
        ];

        return view('products', compact ('products'));
    }

}
