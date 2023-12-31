<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HealthNoke | Masuk</title>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body  class="mx-[6rem] my-[3rem]">
    {{-- NAVBAR --}}
    @include('partials/navbar')

    {{-- LOGIN FORM --}}
    <div class="grid justify-items-center space-y-10 mt-10">
        <div class="text-center space-y-2">
            <h1 class="text-headline1">Masuk ke akunmu</h1>
            <p class="text-body1 text-neutral-600">Selamat datang kembali! Mohon verifikasi data diri</p>
        </div>
        <form action="masuk" method="post">
            @csrf
            <div class="w-80 space-y-7">
                <div class="space-y-5">
                    <div>
                        <label for="email" class="text-body1">Email</label>
                        <br><input type="email" name="email" id="email" placeholder="Masukkan email anda" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full @error('email') is-invalid @enderror" required value="{{ old('email') }}" autofocus>
                        @error('email')
                            <div class="border-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="text-body1">Password</label>
                        <br><input type="password" name="password" id="password" placeholder="************" class="border-[1px] rounded border-neutral-400 text-text1 text-neutral-600 p-2 w-full" required>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex space-x-2">
                            <input type="checkbox" name="remember" id="remember">
                            <p class="text-body1">Ingat Saya</p>
                        </div>
                        <a href="" class="text-headline4 text-primary-500 self-center">Lupa Password</a>
                    </div>
                </div>
                <div class="space-y-5">
                    <button type="submit" class="text-btnmedium  bg-primary-500 shadow-btnshadow rounded py-2.5 w-full">Masuk</button>
                    <div class="flex justify-center border border-neutral-500 rounded py-2.5 w-full space-x-2">
                        <img src="assets/google.svg" alt="">
                        <p class="text-btnmedium self-center">Masuk dengan Google</p>
                    </div>
                </div>
            </div>
        </form>
        <div class="flex justify-center">
            <p class="text-body1 text-neutral-800">Belum punya akun?</p>
            <a href="daftar" class="text-headline4 text-primary-500 ps-1 self-center">Daftar</a>
        </div>
    </div>

    
</body>
</html>