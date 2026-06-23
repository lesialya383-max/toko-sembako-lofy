<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            ['nama' => 'Beras Premium', 'harga' => 65000, 'gambar' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'],
            ['nama' => 'Minyak Goreng', 'harga' => 18000, 'gambar' => 'https://images.unsplash.com/photo-1506976785307-8732e854ad03?w=400'],
            // Link Gula Pasir diperbarui di sini:
            ['nama' => 'Gula Pasir', 'harga' => 15000, 'gambar' => 'https://placehold.co/400x400/png?text=Gula+Pasir'],
            ['nama' => 'Telur Ayam', 'harga' => 26000, 'gambar' => 'https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400'],
        ];

        return view('home', compact('products'));
    }
}