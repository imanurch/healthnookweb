<nav>
    <div class="flex justify-between">
        <div class="flex space-x-[3.12rem] text-body1 text-neutral-900 ">
            <div class="flex">
                <img src="assets/logo.svg" alt="">
                <p class="text-headline2 self-center ps-2"><span class="text-primary-500">Health</span>Nook</p>
            </div>
            <div class="space-x-[3.12rem] self-center">
                <a href="index.php" class="text-headline4 underline underline-offset-4 text-primary-500">Home</a>
                <a href="">Produk</a>
                <a href="">Tentang Kami</a>
                <a href="">Kontak</a>
            </div>
        </div>

        @auth
            <h1>udah</h1>
        @endauth
        @guest
            <div class="grid grid-cols-2 gap-[1rem]">
                <a href="masuk" class="text-btnmedium text-primary-500 border-[1px] border-primary-500 rounded px-xbtnpadding py-ybtnpadding">Masuk</a>
                <a href="daftar" class="text-btnmedium text-neutral-0 bg-primary-500 shadow-btnshadow rounded px-xbtnpadding py-ybtnpadding">Daftar</a>
            </div>
        @endguest 
        
        
    </div>

    @if(session()->has('loginError'))
        <script>alert("Login Gagal")</script>
    @endif

</nav>