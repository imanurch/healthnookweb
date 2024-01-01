@extends('store.layout')

@section('container')
    {{-- REKOMENDASI --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">Rekomendasi</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">Lagi hits saat ini</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($products as $product)
            <div class="border rounded p-2 space-y-2">
                <img src="{{ asset('storage/'.$product->foto_product) }}" alt="" class="w-48 h-48 object-none object-center">
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
            <h3 class="text-headline3 text-neutral-900">{{ $masker->first()->jenisproduct->nama_kategori }}</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">{{ $masker->first()->jenisproduct->deskripsi }}</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($masker as $mask)
            <div class="border rounded p-2 space-y-2">
                <img src="{{ asset('storage/'.$product->foto_product) }}" alt="" class="w-48 h-48 object-none object-center">
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
            <h3 class="text-headline3 text-neutral-900">{{ $obat_dalam->first()->jenisproduct->nama_kategori }}</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">{{ $obat_dalam->first()->jenisproduct->deskripsi }}</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($obat_dalam as $od)
            <div class="border rounded p-2 space-y-2">
                <img src="{{ asset('storage/'.$product->foto_product) }}" alt="" class="w-48 h-48 object-none object-center">
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
            <h3 class="text-headline3 text-neutral-900">{{ $alat_medis->first()->jenisproduct->nama_kategori }}</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">{{ $alat_medis->first()->jenisproduct->deskripsi }}</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($alat_medis as $alat)
            <div class="border rounded p-2 space-y-2">
                <img src="{{ asset('storage/'.$product->foto_product) }}" alt="" class="w-48 h-48 object-none object-center">
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
            <h3 class="text-headline3 text-neutral-900">{{ $obat_luar->first()->jenisproduct->nama_kategori }}</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">{{ $masker->first()->jenisproduct->deskripsi }}</p>
        </div>
        <div class="flex mt-2.5 space-x-5">
            @foreach ($obat_luar as $ol)
            <div class="border rounded p-2 space-y-2">
                <img src="{{ asset('storage/'.$product->foto_product) }}" alt="" class="w-48 h-48 object-none object-center">
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