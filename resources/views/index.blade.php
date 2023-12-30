@extends('store.layout')

@section('container')
{{--  --}}
{{-- <div id="#katalog">
    <h2 class="text-headline1 mb-1">Produk Unggulan</h2>
    <p class="text-body1">Jelajahi katalog produk unggulan kami dan raih pilihan kesehatan terbaik yang sesuai dengan kebutuhan Anda.</p>
    <div class="flex space-x-5 mt-2">
        <a href="\" class="grid justify-items-center bg-primary-600 text-neutral-0 py-2.5 w-28 rounded">
            <img src="assets/all.svg" alt="" class="mb-1">
            <p>Semua</p>
        </a>
        <a href="masker" class="grid justify-items-center border border-neutral-200 text-neutral-800 py-2.5 w-28 rounded">
            <img src="assets/mask.svg" alt="" class="mb-1">
            <p>Masker</p>
        </a>
        <a href="obat_dalam" class="grid justify-items-center border border-neutral-200 text-neutral-800 py-2.5 w-28 rounded">
            <img src="assets/pill.svg" alt="" class="mb-1">
            <p>Obat dalam</p>
        </a>
        <a href="alat_medis" class="grid justify-items-center border border-neutral-200 text-neutral-800 py-2.5 w-28 rounded">
            <img src="assets/microscope.svg" alt="" class="mb-1">
            <p>Alat medis</p>
        </a>
        <a href="obat_luar" class="grid justify-items-center border border-neutral-200 text-neutral-800 py-2.5 w-28 rounded">
            <img src="assets/bandage.svg" alt="" class="mb-1">
            <p>Obat luar</p>
        </a>
        <div class="grid justify-items-center border border-neutral-200 text-neutral-800 py-2.5 w-28 rounded">
            <img src="assets/more.svg" alt="" class="mb-1">
            <p>Lainnya</p>
        </div>
    </div> --}}
    {{-- REKOMENDASI --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">Rekomendasi</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">Lagi hits saat ini</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($products as $product)
            <div class="border rounded p-2 space-y-2">
                <img src="assets/illustrasi1.svg" alt="" class="w-48">
                <div class="space-y-2">
                    <p class="text-body1 text-neutral-900 w-48 h-12">{{ $product->nama_product }}</p>
                    <h4 class="text-headline4 text-neutral-900">Rp{{ $product->harga }}</h4>
                    <p class="text-body1 text-neutral-600">Tersisa {{ $product->stok }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- MASKER --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">Masker</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">Perlindungan pertamamu</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($masker as $mask)
            <div class="border rounded p-2 space-y-2">
                <img src="assets/illustrasi1.svg" alt="" class="w-48">
                <div class="space-y-2">
                    <p class="text-body1 text-neutral-900 w-48 h-12">{{ $mask->nama_product }}</p>
                    <h4 class="text-headline4 text-neutral-900">Rp{{ $mask->harga }}</h4>
                    <p class="text-body1 text-neutral-600">Tersisa {{ $mask->stok }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- OBAT DALAM --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">Obat Dalam</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">Perlindungan pertamamu</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($obat_dalam as $od)
            <div class="border rounded p-2 space-y-2">
                <img src="assets/illustrasi1.svg" alt="" class="w-48">
                <div class="space-y-2">
                    <p class="text-body1 text-neutral-900 w-48 h-12">{{ $od->nama_product }}</p>
                    <h4 class="text-headline4 text-neutral-900">Rp{{ $od->harga }}</h4>
                    <p class="text-body1 text-neutral-600">Tersisa {{ $od->stok }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ALAT MEDIS --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">Alat Medis</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">Perlindungan pertamamu</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($alat_medis as $alat)
            <div class="border rounded p-2 space-y-2">
                <img src="assets/illustrasi1.svg" alt="" class="w-48">
                <div class="space-y-2">
                    <p class="text-body1 text-neutral-900 w-48 h-12">{{ $alat->nama_product }}</p>
                    <h4 class="text-headline4 text-neutral-900">Rp{{ $alat->harga }}</h4>
                    <p class="text-body1 text-neutral-600">Tersisa {{ $alat->stok }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- OBAT LUAR --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">Obat Luar</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">Perlindungan pertamamu</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($obat_luar as $ol)
            <div class="border rounded p-2 space-y-2">
                <img src="assets/illustrasi1.svg" alt="" class="w-48">
                <div class="space-y-2">
                    <p class="text-body1 text-neutral-900 w-48 h-12">{{ $ol->nama_product }}</p>
                    <h4 class="text-headline4 text-neutral-900">Rp{{ $ol->harga }}</h4>
                    <p class="text-body1 text-neutral-600">Tersisa {{ $ol->stok }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
{{-- </div> --}}
@endsection