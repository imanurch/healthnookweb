@extends('admin.layout')

@section('container')
<div>
    <h1 class="text-headline1 mb-10">{{ $title }} Product</h1>
    <div class="w-80 space-y-10">
        <div class="space-y-5">
            <div>
                <label for="id" class="text-body1 text-neutral-400">Id Product</label>
                <br><input type="text" name="id" id="id" value="{{ $currentid }}" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-400 p-2 w-full" disabled>
            </div>
            <div>
                <label for="nama" class="text-body1">Nama</label>
                <br><input type="text" name="nama" id="nama" placeholder="Masukkan nama product" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
            </div>
            <div>
                <label for="kategori" class="text-body1">Kategori</label>
                <br><select name="kategori" id="kategori" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
                    @foreach($kategori as $list)
                        <option value="{{ $list->id_kategori }}">{{ $list->id_kategori }}{{ $list->nama_kategori }}</option>
                    @endforeach
                    </select>
            </div>
            <div>
                <label for="email" class="text-body1">Harga</label>
                <br><input type="text" name="email" id="email" placeholder="Masukkan harga product" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
            </div>
            <div>
                <label for="stok" class="text-body1">Stok</label>
                <br><input type="number" name="stok" id="stok" placeholder="0" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
            </div>
            <div>
                <label for="gambar" class="text-body1">Gambar</label>
                <br><input type="file" name="gambar" id="gambar"  class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
            </div>
        </div>
        <div class="space-y-5">
            <button type="submit" class="text-btnmedium text-neutral-0 bg-primary-500 shadow-btnshadow rounded py-2.5 w-full">{{ $save }}</button>
            <div class="flex justify-center border border-neutral-500 rounded py-2.5 w-full space-x-2">
                <a href="" class="text-btnmedium self-center">Batal</a>
            </div>
        </div>
    </div>
</div>
@endsection