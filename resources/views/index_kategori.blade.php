@extends('store.layout')

@section('container')
    {{-- REKOMENDASI --}}
    <div class="mt-10">
        <div class="flex">
            <h3 class="text-headline3 text-neutral-900">{{ $products->first()->jenisproduct->nama_kategori }}</h3>
            <p class="text-body2 text-neutral-600 self-center ms-2">{{ $products->first()->jenisproduct->deskripsi }}</p>
        </div>
        <div class="grid grid-cols-5 mt-2.5 gap-5">
            @foreach ($products as $product)
            <div class="border rounded p-2 space-y-2">
                <img src="{{ asset('storage/'.$product->foto_product) }}" alt="" class="w-48 h-48 object-none object-center rounded">
                <div class="space-y-2">
                    <p class="text-body1 text-neutral-900 w-48 h-12">{{ $product->nama_product }}</p>
                    <h4 class="text-headline4 text-neutral-900">Rp{{ $product->harga }}</h4>
                    <p class="text-body1 text-neutral-600">Tersisa {{ $product->stok }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
{{-- </div> --}}
@endsection