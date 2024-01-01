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
            <div class="flex justify-center">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.2394 17.43C18.1944 17.43 18.1644 17.43 18.1194 17.43C18.0444 17.415 17.9394 17.415 17.8494 17.43C13.4994 17.295 10.2144 13.875 10.2144 9.66C10.2144 5.37 13.7094 1.875 17.9994 1.875C22.2894 1.875 25.7844 5.37 25.7844 9.66C25.7694 13.875 22.4694 17.295 18.2844 17.43C18.2694 17.43 18.2544 17.43 18.2394 17.43ZM17.9994 4.125C14.9544 4.125 12.4644 6.615 12.4644 9.66C12.4644 12.66 14.8044 15.075 17.7894 15.18C17.8644 15.165 18.0744 15.165 18.2694 15.18C21.2094 15.045 23.5194 12.63 23.5344 9.66C23.5344 6.615 21.0444 4.125 17.9994 4.125Z" fill="#FF91A4"/>
                    <path d="M18.2544 33.825C15.3144 33.825 12.3594 33.075 10.1244 31.575C8.03941 30.195 6.89941 28.305 6.89941 26.25C6.89941 24.195 8.03941 22.29 10.1244 20.895C14.6244 17.91 21.9144 17.91 26.3844 20.895C28.4544 22.275 29.6094 24.165 29.6094 26.22C29.6094 28.275 28.4694 30.18 26.3844 31.575C24.1344 33.075 21.1944 33.825 18.2544 33.825ZM11.3694 22.785C9.92941 23.745 9.14941 24.975 9.14941 26.265C9.14941 27.54 9.94441 28.77 11.3694 29.715C15.1044 32.22 21.4044 32.22 25.1394 29.715C26.5794 28.755 27.3594 27.525 27.3594 26.235C27.3594 24.96 26.5644 23.73 25.1394 22.785C21.4044 20.295 15.1044 20.295 11.3694 22.785Z" fill="#2E2E2E"/>
                    </svg>
                <p class="self-center">{{ auth()->users()->nama_user }}</p>
            </div>       
        @else
            <div class="grid grid-cols-2 gap-[1rem]">
                <a href="masuk" class="text-btnmedium text-primary-500 border-[1px] border-primary-500 rounded px-xbtnpadding py-ybtnpadding">Masuk</a>
                <a href="daftar" class="text-btnmedium text-neutral-0 bg-primary-500 shadow-btnshadow rounded px-xbtnpadding py-ybtnpadding">Daftar</a>
            </div>
        @endauth
        
        
        
    </div>

    {{-- @if(session()->has('loginError'))
        <script>alert("Login Gagal")</script>
    @endif --}}

</nav>

@dd(auth())