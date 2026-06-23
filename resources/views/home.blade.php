<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sembako Lofy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">

    <nav class="bg-green-600 p-6 shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto flex justify-between items-center text-white font-bold">
            <h1 class="text-xl">Toko Sembako Lofy</h1>
            <div class="space-x-6">
                <a href="/" class="hover:text-green-200">Beranda</a>
                <button onclick="document.getElementById('produk').scrollIntoView({behavior: 'smooth'})" class="hover:text-green-200">Produk</button>
                <button onclick="document.getElementById('kontak').scrollIntoView({behavior: 'smooth'})" class="hover:text-green-200">Kontak</button>
            </div>
        </div>
    </nav>

    <section class="pt-40 pb-20 text-center bg-white">
        <h1 class="text-5xl font-extrabold text-gray-900">
            Kebutuhan Pokok, <span class="text-green-600">Harga Murah!</span>
        </h1>
        <p class="mt-4 text-xl text-gray-600">Segar, Lengkap, dan Terpercaya.</p>
        <div class="mt-8">
            <button onclick="document.getElementById('produk').scrollIntoView({behavior: 'smooth'})" 
                    class="bg-green-600 text-white px-8 py-3 rounded-full font-bold hover:bg-green-700 transition shadow-lg">
                Lihat Produk
            </button>
        </div>
    </section>

    <section id="produk" class="container mx-auto py-20 px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Produk Terlaris</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-lg border border-gray-100 transition hover:shadow-2xl">
                <img src="{{ $product['gambar'] }}" class="w-full h-40 object-cover rounded">
                <h3 class="mt-4 font-bold text-lg">{{ $product['nama'] }}</h3>
                <p class="text-green-600 font-bold text-xl mb-4">Rp {{ number_format($product['harga'], 0, ',', '.') }}</p>
                <button onclick="alert('Berhasil membeli {{ $product['nama'] }}!')"
                        class="w-full bg-green-600 text-white py-2 rounded font-bold hover:bg-green-700 transition cursor-pointer">
                    Beli
                </button>
            </div>
            @endforeach
        </div>
    </section>

    <section id="kontak" class="bg-gray-800 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Hubungi Kami</h2>
            <div class="flex flex-col items-center gap-2 text-lg">
                <p>📍 Jl.A.Yani No. 123, Kota Baturaja</p>
                <p>📞 WhatsApp: 0812-3456-7890</p>
                <p>📧 Email: info@tokosembakoLofy.com</p>
            </div>
        </div>
    </section>

</body>
</html>