<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        ['nama' => 'Beras Premium', 'harga' => 65000, 'gambar' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?q=80&w=500'],
        ['nama' => 'Minyak Goreng', 'harga' => 18000, 'gambar' => 'https://images.unsplash.com/photo-1574781330855-d228249a2a7f?q=80&w=500'],
        ['nama' => 'Gula Pasir', 'harga' => 15000, 'gambar' => 'https://images.unsplash.com/photo-1615837134538-e60d2432a59a?q=80&w=500'],
        ['nama' => 'Telur Ayam', 'harga' => 26000, 'gambar' => 'https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?q=80&w=500'],
    ];

    return view('home', ['products' => $products]);
});