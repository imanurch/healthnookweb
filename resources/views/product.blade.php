@extends('admin.layout')

@section('container')
<div class="flex justify-between mb-7">
    <h1 class="text-headline1">Data Product</h1>
    <a href="tambah_product.php" class="rounded bg-primary-500 text-btnmedium text-neutral-0 py-2.5 px-4 self-center">Tambah</a>
</div>
<div>
    <table class="table-auto max-w-full">
        <thead class="bg-primary-25 text-headline4">
            <tr>
                <th class="py-[1.19rem] px-[0.81rem] rounded-s">Id Product</th>
                <th class="py-[1.19rem] px-[0.81rem]">Nama</th>
                <th class="py-[1.19rem] px-[0.81rem]">Kategori</th>
                <th class="py-[1.19rem] px-[0.81rem]">Harga</th>
                <th class="py-[1.19rem] px-[0.81rem]">Stok</th>
                <th class="py-[1.19rem] px-[0.81rem] rounded-e">Action</th>
            </tr>
        </thead>
        <tbody class="text-center text-body1">
            @foreach($products as $product)
                <tr class="border-b-[1px] border-primary-50">
                    <td class="px-5">{{ $product->id_product }}</td>
                    <td class="px-5">
                        <div class="flex space-x-1">
                            <img src="{{ $product->foto_product }}" alt="" class="w-10">
                            <p class="self-center">{{ $product->nama_product }}</p>
                        </div>
                    </td>
                    <td class="px-5">{{ $product->kategori }}</td>
                    <td class="px-5">{{ $product->harga }}</td>
                    <td class="px-5">{{ $product->stok }}</td>
                    <td class="px-5 py-2">
                        <div class="flex space-x-2.5">                    
                            <a href="edit_product.php" class=" rounded bg-warning-500 text-btnmedium text-neutral-0 self-center py-2.5 px-4">Edit</a>
                            <a href="" class=" rounded bg-danger-500 text-btnmedium text-neutral-0 self-center py-2.5 px-4">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>       
@endsection