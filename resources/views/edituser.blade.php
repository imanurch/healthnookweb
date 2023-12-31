@extends('admin.layout')

@section('container')
<div>
    <h1 class="text-headline1 mb-10">Edit User</h1>
    <form action="/edit_user/{{ $user->id_user }}" method="post">
        @method('put')
        @csrf
        <div class="w-80 space-y-10">
            <div class="space-y-5">
                <div>
                    <label for="id_user" class="text-body1 text-neutral-400">Id User</label>
                    <br><input type="id" name="id_user" id="id_user" value="{{ $user->id_user }}" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-400 p-2 w-full" disabled>
                </div>
                <div>
                    <label for="nama_user" class="text-body1">Nama</label>
                    <br><input type="text" name="nama_user" id="nama_user" value="{{ $user->nama_user }}" placeholder="Masukkan nama anda" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full @error('nama_user') is-invalid @enderror" required value="{{ old('nama_user') }}" autofocus>
                    @error('nama_user')
                        <div class="border-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="no_telp" class="text-body1">Nomor Telephone</label>
                    <br><input type="text" name="no_telp" id="no_telp" value="{{ $user->no_telp }}" placeholder="Masukkan nomor anda" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full @error('no_telp') is-invalid @enderror" required value="{{ old('no_telp') }}">
                    @error('no_telp')
                        <div class="border-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email" class="text-body1">Email</label>
                    <br><input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="Masukkan email anda" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                    @error('email')
                        <div class="border-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="text-body1">Password</label>
                    <br><input type="password" name="password" id="password" placeholder="Buat password" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full @error('password') is-invalid @enderror" required>
                    @error('password')
                        <div class="border-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="space-y-5">
                <button type="submit" class="text-btnmedium text-neutral-0 bg-primary-500 shadow-btnshadow rounded py-2.5 w-full">Simpan</button>
                <div class="flex justify-center border border-neutral-500 rounded py-2.5 w-full space-x-2">
                    <a href="" class="text-btnmedium self-center">Batal</a>
                </div>
            </div> 
        </div>
    </form>
</div>
@endsection