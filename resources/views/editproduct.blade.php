@extends('admin.layout')

@section('container')
<div>
    <h1 class="text-headline1 mb-10">Edit Product</h1>
    <form action="/edit_product/{{ $product->id_product }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="w-80 space-y-10">
            <div class="space-y-5">
                <div>
                    <label for="id_product" class="text-body1 text-neutral-400">Id Product</label>
                    <br><input type="text" name="id_product" id="id_product" value="{{ $product->id_product }}" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-400 p-2 w-full" disabled>
                </div>
                <div>
                    <label for="nama_product" class="text-body1">Nama</label>
                    <br><input type="text" name="nama_product" id="nama_product" value="{{ $product->nama_product }}" placeholder="Masukkan nama product" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
                </div>
                <div>
                    <label for="id_kategori" class="text-body1">Kategori</label>
                    <br><select name="id_kategori" id="id_kategori" value="" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
                        <option value="{{ $product->id_kategori }}" selected>{{ $product->jenisproduct->nama_kategori }}</option>
                        @foreach($kategori as $list)
                            <option value="{{ $list->id_kategori }}">{{ $list->nama_kategori }}</option>
                        @endforeach
                        </select>
                </div>
                <div>
                    <label for="harga" class="text-body1">Harga</label>
                    <br><input type="text" name="harga" id="harga" value="{{ $product->harga }}" placeholder="Masukkan harga product" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full @error('harga') is-invalid @enderror" required value="{{ old('harga') }}" autofocus>
                    @error('harga')
                        <div class="border-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="stok" class="text-body1">Stok</label>
                    <br><input type="number" name="stok" id="stok" value="{{ $product->stok }}" placeholder="0" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
                </div>
                <div>
                    <label for="foto_product" class="text-body1">Gambar</label>
                    <br><input type="file" name="foto_product" id="foto_product" value="{{ asset('storage/'.$product->foto_product) }}" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full">
                </div>
            </div>
            <div class="space-y-5">
                <button type="submit" class="text-btnmedium text-neutral-0 bg-primary-500 shadow-btnshadow rounded py-2.5 w-full">Simpan Perubahan</button>
                <div class="flex justify-center border border-neutral-500 rounded py-2.5 w-full space-x-2">
                    <a href="" class="text-btnmedium self-center">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection