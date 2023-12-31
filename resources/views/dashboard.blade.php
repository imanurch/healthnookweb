@extends('admin.layout')

@section('container')
<div>
    <h1 class="text-headline1 mb-10">Selamat Datang Admin</h1>
    <div class="flex space-x-5">
        <div class="border border-neutral-200 rounded py-2.5 px-3">
            <div class="flex space-x-3">
                <img src="assets/product.svg" alt="" class="w-24">
                <div class="self-center">
                    <div class="flex">
                        <h1 class="text-headline1 text-primary-500">{{ $active_product }}</h1>
                        <h3 class="text-headline3 text-neutral-400 self-center">/{{ count($products) }}</h3>
                    </div>
                    <div class="w-28">
                        <p class="text-body1">Jenis Produk Tersedia</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-neutral-200 rounded py-2.5 px-3">
            <div class="flex space-x-3">
                <img src="assets/user.svg" alt="" class="w-24">
                <div class="self-center">
                    <div class="flex">
                        <h1 class="text-headline1 text-primary-500">{{ $active_user }}</h1>
                        <h3 class="text-headline3 text-neutral-400 self-center">/{{ $all_user }}</h3>
                    </div>
                    <p class="text-body1">User Aktif</p>
                </div>
            </div>
        </div>
    </div>
    {{-- DATA --}}
    <div class="mt-14">
        <h1 class="text-headline1 mb-7">Data Product</h1>
        <div>
            <table class="table-auto max-w-full">
                <thead class="bg-primary-25 text-headline4">
                    <tr>
                        <th class="py-[1.19rem] px-[0.81rem] rounded-s">Id Product</th>
                        <th class="py-[1.19rem] px-[0.81rem]">Nama</th>
                        <th class="py-[1.19rem] px-[0.81rem]">Kategori</th>
                        <th class="py-[1.19rem] px-[0.81rem] rounded-e">Harga</th>
                        <th class="py-[1.19rem] px-[0.81rem] rounded-e">Stok</th>
                    </tr>
                </thead>
                <tbody class="text-center text-body1">
                    @foreach($products as $product)
                        <tr class="border-b-[1px] border-primary-50">
                            <td class="px-5">{{ $product->id_product }}</td>
                            <td class="px-5 py-2" class="flex space-x-1">
                                <img src="{{ $product->foto_product}}" alt="" class="w-10">
                                <p class="self-center">{{ $product->nama_product}}</p>
                            </td>
                            <td class="px-5">{{ $product->jenisproduct->nama_kategori}}</td>
                            <td class="px-5">{{ $product->harga}}</td>
                            <td class="px-5">{{ $product->stok}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection