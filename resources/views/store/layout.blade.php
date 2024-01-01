<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HealthNoke | Home</title>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="mx-[6rem] my-[3rem]">
    {{-- NAVBAR --}}
    @include('partials/navbar')
    {{--  --}}
    <div class="flex space-x-10 mt-[2.69rem]">
        <div class="text-neutral-900 self-center">
            <h1 class="text-headline w-[38.375rem] mb-1">Raih Gaya Hidup Sehat dengan Bantuan <span class="text-primary-500">HealthNook</span>.</h1>
            <p class="w-[34.6875rem]">Melalui <span class="text-primary-500">HealthNook</span>, temukan solusi lengkap untuk kebahagiaan dan kesehatan Anda, dengan beragam produk dan panduan hidup sehat.</p>
            <div class="mt-5 space-x-8">
                <a href="katalog" class="text-btnmedium text-neutral-0 bg-primary-500 shadow-btnshadow rounded px-xbtnpadding py-ybtnpadding">Jelajahi produk kesehatan</a>
                <a href="" class="text-primary-500 px-xbtnpadding py-ybtnpadding">Pelajari lebih lanjut <img src="assets/icons.svg" alt="" class="inline"></a>
            </div>
        </div>
        <div>
            <img src="assets/illustrasi1.svg" alt="" class="w-[26.215rem]">
        </div>
    </div>
    <div id="#katalog">
        <h2 class="text-headline1 mb-1">Produk Unggulan</h2>
        <p class="text-body1">Jelajahi katalog produk unggulan kami dan raih pilihan kesehatan terbaik yang sesuai dengan kebutuhan Anda.</p>
        <div class="flex space-x-5 mt-2">
            <a href="\" class="grid justify-items-center py-2.5 w-28 rounded {{ ($products->first()->jenisproduct->id_kategori !== "0")? 'border border-neutral-200 text-neutral-800' : 'bg-primary-600 text-neutral-0' }}">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.7916 25C44.7916 36.5059 36.5059 44.7917 25 44.7917C13.494 44.7917 5.20831 36.5059 5.20831 25C5.20831 13.4941 13.494 5.20833 25 5.20833C36.5059 5.20833 44.7916 13.4941 44.7916 25Z" stroke="{{ ($products->first()->jenisproduct->id_kategori !== "0")? '#4F4F4F' : '#FFF'}}" stroke-width="2.08333"/>
                    <path d="M21.292 16.1909C21.0937 16.6695 21.0937 17.2762 21.0937 18.4896V20.9687C21.0937 21.0277 21.0937 21.0571 21.0754 21.0754C21.0571 21.0937 21.0277 21.0937 20.9687 21.0937H18.4896C17.2762 21.0937 16.6695 21.0937 16.1909 21.292C15.5528 21.5563 15.0459 22.0632 14.7815 22.7013C14.5833 23.1799 14.5833 23.7866 14.5833 25C14.5833 26.2134 14.5833 26.8201 14.7815 27.2986C15.0459 27.9367 15.5528 28.4437 16.1909 28.708C16.6695 28.9062 17.2762 28.9062 18.4896 28.9062H20.9687C21.0277 28.9062 21.0571 28.9062 21.0754 28.9246C21.0937 28.9429 21.0937 28.9723 21.0937 29.0312V31.5104C21.0937 32.7238 21.0937 33.3305 21.292 33.8091C21.5563 34.4472 22.0632 34.9541 22.7013 35.2184C23.1799 35.4167 23.7866 35.4167 25 35.4167C26.2134 35.4167 26.8201 35.4167 27.2986 35.2184C27.9367 34.9541 28.4437 34.4472 28.708 33.8091C28.9062 33.3305 28.9062 32.7238 28.9062 31.5104V29.0312C28.9062 28.9723 28.9062 28.9429 28.9245 28.9246C28.9428 28.9062 28.9723 28.9062 29.0312 28.9062H31.5104C32.7238 28.9062 33.3305 28.9062 33.8091 28.708C34.4471 28.4437 34.9541 27.9367 35.2184 27.2986C35.4166 26.8201 35.4166 26.2134 35.4166 25C35.4166 23.7866 35.4166 23.1799 35.2184 22.7013C34.9541 22.0632 34.4471 21.5563 33.8091 21.292C33.3305 21.0937 32.7238 21.0937 31.5104 21.0937H29.0312C28.9723 21.0937 28.9428 21.0937 28.9245 21.0754C28.9062 21.0571 28.9062 21.0277 28.9062 20.9687V18.4896C28.9062 17.2762 28.9062 16.6695 28.708 16.1909C28.4437 15.5528 27.9367 15.0459 27.2986 14.7816C26.8201 14.5833 26.2134 14.5833 25 14.5833C23.7866 14.5833 23.1799 14.5833 22.7013 14.7816C22.0632 15.0459 21.5563 15.5528 21.292 16.1909Z" stroke="{{ ($products->first()->jenisproduct->id_kategori !== "0")? '#FF91A4' : '#FFF'}}" stroke-width="2.08333"/>
                    </svg>                    
                <p>Semua</p>
            </a>
            <a href="masker" class="grid justify-items-center py-2.5 w-28 rounded {{ ($products->first()->jenisproduct->nama_kategori === "Masker")? 'bg-primary-600 text-neutral-0' : 'border border-neutral-200 text-neutral-800'}}">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.663 30.2053C41.0715 30.0771 44.7917 25.9598 44.7917 20.8333C44.7917 17.978 43.6429 15.625 41.6667 15.625C40.2612 15.625 39.4282 16.7961 38.5226 17.7016M37.663 30.2053V30.2053C37.5631 31.6582 36.6533 32.9303 35.2741 33.3981C32.8003 34.2371 28.6698 35.4167 25 35.4167C21.3303 35.4167 17.1997 34.2371 14.726 33.3981C13.3468 32.9303 12.437 31.6582 12.3371 30.2053V30.2053M37.663 30.2053L38.5226 17.7016M11.4774 17.7016V17.7016C11.4665 17.5426 11.5745 17.3999 11.7305 17.3672L22.8613 15.032C24.2718 14.7361 25.7283 14.7361 27.1388 15.032L38.2696 17.3672C38.4256 17.3999 38.5336 17.5426 38.5226 17.7016V17.7016M11.4774 17.7016C10.5719 16.7961 9.73886 15.625 8.33337 15.625C6.35718 15.625 5.20837 17.978 5.20837 20.8333C5.20837 25.9598 8.92855 30.0771 12.3371 30.2053M11.4774 17.7016L12.3371 30.2053" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#22202A'}}" stroke-width="2.08333"/>
                    <path d="M17.7084 20.8333H32.2917" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333" stroke-linecap="round"/>
                    <path d="M18.7501 25H31.2501" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#4F4F4F'}}" stroke-width="2.08333" stroke-linecap="round"/>
                    <path d="M17.7084 29.1667H32.2917" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333" stroke-linecap="round"/>
                    </svg>                    
                <p>Masker</p>
            </a>
            <a href="obat_dalam" class="grid justify-items-center py-2.5 w-28 rounded {{ ($products->first()->jenisproduct->nama_kategori === "Obat Dalam")? 'bg-primary-600 text-neutral-0' : 'border border-neutral-200 text-neutral-800'}}">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0913 28.764L26.3678 10.0605C29.0646 6.96163 33.7629 6.63566 36.8618 9.33244C39.9607 12.0292 40.2867 16.7275 37.5899 19.8264L35.1503 22.6298C33.9456 22.143 32.6291 21.875 31.25 21.875C25.4971 21.875 20.8334 26.5387 20.8334 32.2917M10.0913 28.764C7.39454 31.8629 7.72052 36.5612 10.8194 39.2579C14.6604 42.6005 19.276 40.8711 22.22 37.488C21.338 35.9586 20.8334 34.1841 20.8334 32.2917M10.0913 28.764L19.0434 18.4771M20.8334 32.2917C20.8334 29.3639 22.0413 26.7182 23.9859 24.8258" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Dalam")? '#FFF' : '#22202A'}}" stroke-width="2.08333"/>
                    <path d="M19.0433 18.4771C20.6806 21.3552 22.1383 23.3033 23.9858 24.8258" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Dalam")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333"/>
                    <path d="M33.2507 11.4286C30.5666 10.7361 28.9389 12.6064 28.1251 13.5416" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Dalam")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333" stroke-linecap="round"/>
                    <path d="M41.6667 32.2917C41.6667 38.0446 37.003 42.7083 31.25 42.7083C25.4971 42.7083 20.8334 38.0446 20.8334 32.2917C20.8334 26.5387 25.4971 21.875 31.25 21.875C37.003 21.875 41.6667 26.5387 41.6667 32.2917Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Dalam")? '#FFF' : '#22202A'}}" stroke-width="2.08333"/>
                    <path d="M24.2068 34.1789L38.2932 30.4045" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Dalam")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333" stroke-linecap="round"/>
                    </svg>                    
                <p>Obat dalam</p>
            </a>
            <a href="alat_medis" class="grid justify-items-center py-2.5 w-28 rounded {{ ($products->first()->jenisproduct->nama_kategori === "Alat Medis")? 'bg-primary-600 text-neutral-0' : 'border border-neutral-200 text-neutral-800'}}">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5834 41.875C14.5834 40.034 16.0758 38.5417 17.9167 38.5417H32.0834C33.9243 38.5417 35.4167 40.034 35.4167 41.875V41.875C35.4167 42.3352 35.0436 42.7083 34.5834 42.7083H15.4167C14.9565 42.7083 14.5834 42.3352 14.5834 41.875V41.875Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Alat Medis")? '#FFF' : '#22202A'}}" stroke-width="2.08333"/>
                    <path d="M18.6434 31.2499C18.6434 31.2499 21.4831 33.3783 23.2033 33.7323C24.7362 34.0477 26.325 33.954 27.8102 33.4607C29.2954 32.9674 30.6245 32.0919 31.6641 30.9221C32.7036 29.7523 33.417 28.3294 33.7323 26.7966C34.0477 25.2638 33.9541 23.6749 33.4608 22.1897C33.2245 21.4783 32.9005 20.8027 32.4984 20.1775L32.2917 19.7916M14.1749 31.2499C14.1749 31.2499 15.6915 33.4504 16.6966 34.3436C18.3368 35.8011 20.3317 36.8013 22.4809 37.2435C24.6301 37.6857 26.8578 37.5543 28.9401 36.8627C31.0225 36.171 32.8861 34.9434 34.3436 33.3033C35.8012 31.6631 36.8013 29.6682 37.2435 27.519C37.6857 25.3698 37.5544 23.1421 36.8627 21.0598C36.4998 19.9671 35.9893 18.9346 35.349 17.9894L35.1956 17.8233M32.2917 19.7916C33.6089 19.7916 34.7358 18.9765 35.1956 17.8233M32.2917 19.7916C31.1909 19.7916 30.2231 19.2224 29.6664 18.3624M35.1956 17.8233C35.3383 17.4655 35.4167 17.0752 35.4167 16.6666C35.4167 15.8615 35.1122 15.1275 34.6122 14.5735M29.6664 18.3624C29.3502 17.8739 29.1667 17.2917 29.1667 16.6666C29.1667 14.9407 30.5658 13.5416 32.2917 13.5416C33.2125 13.5416 34.0403 13.9398 34.6122 14.5735M29.6664 18.3624L23.6179 22.996C23.0364 23.4415 22.2297 23.2966 21.7842 22.7151L19.1608 19.3592C18.9465 19.0794 18.8394 18.9395 18.7711 18.8068C18.453 18.1882 18.5525 17.4371 19.0206 16.9227C19.1211 16.8123 19.261 16.7051 19.5407 16.4908L29.9431 8.52177C30.9276 7.76751 31.4199 7.39038 31.9568 7.37419C32.137 7.36875 32.3168 7.39257 32.4893 7.44471C33.0035 7.60012 33.3806 8.0924 34.1348 9.07696L35.4167 10.7502C35.9151 11.4008 36.1643 11.7261 36.2474 12.0664C36.3463 12.4716 36.2897 12.8992 36.0886 13.2648C35.9199 13.5717 35.5946 13.8209 34.9439 14.3193L34.6122 14.5735" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Alat Medis")? '#FFF' : '#22202A'}}" stroke-width="2.08333"/>
                    <path d="M13.5417 31.25H21.8751" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Alat Medis")? '#FFF' : '#22202A'}}" stroke-width="2.08333" stroke-linecap="round"/>
                    <path d="M34.2984 8.94428C33.9036 8.42897 34.0705 7.74702 34.5722 7.38189C35.3267 6.83279 36.3538 7.03437 36.9077 7.75734L37.4081 8.41059C37.962 9.13355 37.8892 10.1778 37.1626 10.7633C36.6758 11.1557 35.9847 11.1455 35.5829 10.6209L34.9406 9.78259L34.2984 8.94428Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Alat Medis")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333"/>
                    <path d="M18.6434 25C18.9007 24.9233 19.1508 24.7317 19.6508 24.3486L21.7842 22.7152L19.1608 19.3592L17.0541 20.9597L17.0541 20.9597C16.5541 21.3429 16.3041 21.5344 16.1631 21.763C15.9449 22.1167 15.888 22.5467 16.0066 22.9451C16.0833 23.2024 16.2749 23.4525 16.658 23.9525L16.658 23.9525C17.0411 24.4525 17.2327 24.7025 17.4613 24.8435C17.815 25.0617 18.245 25.1187 18.6434 25Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Alat Medis")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333"/>
                    </svg>                    
                <p>Alat medis</p>
            </a>
            <a href="obat_luar" class="grid justify-items-center py-2.5 w-28 rounded {{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? 'bg-primary-600 text-neutral-0' : 'border border-neutral-200 text-neutral-800'}}">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.6343 25L11.7418 30.8926C9.70781 32.9266 9.70781 36.2243 11.7418 38.2583V38.2583C13.7758 40.2923 17.0735 40.2923 19.1075 38.2583L25 32.3657M17.6343 25L25 32.3657M17.6343 25L25 17.6343M25 32.3657L32.3657 25M25 17.6343L30.8926 11.7418C32.9266 9.7078 36.2243 9.70781 38.2583 11.7418V11.7418C40.2923 13.7758 40.2923 17.0735 38.2583 19.1075L32.3657 25M25 17.6343L32.3657 25" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#22202A'}}" stroke-width="2.08333"/>
                    <path d="M33.2424 25.8094L38.2866 30.8927C40.3073 32.9289 40.3009 36.2157 38.2725 38.2441C36.233 40.2836 32.9243 40.2772 30.8927 38.2299L25.8645 33.1628C25.3865 32.6812 25.388 31.9037 25.8678 31.4239L31.4857 25.806C31.9712 25.3205 32.7588 25.3221 33.2424 25.8094Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333"/>
                    <path d="M19.1074 11.7702L24.1357 16.8373C24.6136 17.3189 24.6121 18.0963 24.1323 18.5761L18.5144 24.194C18.0289 24.6795 17.2414 24.678 16.7578 24.1907L11.7135 19.1074C9.69288 17.0712 9.69921 13.7844 11.7276 11.7559C13.7671 9.71644 17.0758 9.72281 19.1074 11.7702Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#FF91A4'}}" stroke-width="2.08333"/>
                    <path opacity="0.5" d="M25 21.8541H25.0208V21.8749H25V21.8541Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#22202A'}}" stroke-width="2.08333" stroke-linejoin="round"/>
                    <path opacity="0.5" d="M25 25H25.0208V25.0208H25V25Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#22202A'}}" stroke-width="2.08333" stroke-linejoin="round"/>
                    <path opacity="0.5" d="M28.125 25H28.1458V25.0208H28.125V25Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#22202A'}}" stroke-width="2.08333" stroke-linejoin="round"/>
                    <path opacity="0.5" d="M21.875 25H21.8958V25.0208H21.875V25Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#22202A'}}" stroke-width="2.08333" stroke-linejoin="round"/>
                    <path opacity="0.5" d="M25 28.1042H25.0208V28.125H25V28.1042Z" stroke="{{ ($products->first()->jenisproduct->nama_kategori === "Obat Luar")? '#FFF' : '#22202A'}}" stroke-width="2.08333" stroke-linejoin="round"/>
                    </svg>
                    
                <p>Obat luar</p>
            </a>
            {{-- <div class="grid justify-items-center border border-neutral-200 text-neutral-800 py-2.5 w-28 rounded">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4167 30.7292C7.25 30.7292 4.6875 28.1667 4.6875 25C4.6875 21.8333 7.25 19.2708 10.4167 19.2708C13.5833 19.2708 16.1458 21.8333 16.1458 25C16.1458 28.1667 13.5833 30.7292 10.4167 30.7292ZM10.4167 22.3958C8.97917 22.3958 7.8125 23.5625 7.8125 25C7.8125 26.4375 8.97917 27.6042 10.4167 27.6042C11.8542 27.6042 13.0208 26.4375 13.0208 25C13.0208 23.5625 11.8542 22.3958 10.4167 22.3958Z" fill="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#FF91A4'}}"/>
                    <path d="M39.5833 30.7292C36.4166 30.7292 33.8541 28.1667 33.8541 25C33.8541 21.8333 36.4166 19.2708 39.5833 19.2708C42.75 19.2708 45.3125 21.8333 45.3125 25C45.3125 28.1667 42.75 30.7292 39.5833 30.7292ZM39.5833 22.3958C38.1458 22.3958 36.9791 23.5625 36.9791 25C36.9791 26.4375 38.1458 27.6042 39.5833 27.6042C41.0208 27.6042 42.1875 26.4375 42.1875 25C42.1875 23.5625 41.0208 22.3958 39.5833 22.3958Z" fill="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#FF91A4'}}"/>
                    <path d="M25 30.7292C21.8334 30.7292 19.2709 28.1667 19.2709 25C19.2709 21.8333 21.8334 19.2708 25 19.2708C28.1667 19.2708 30.7292 21.8333 30.7292 25C30.7292 28.1667 28.1667 30.7292 25 30.7292ZM25 22.3958C23.5625 22.3958 22.3959 23.5625 22.3959 25C22.3959 26.4375 23.5625 27.6042 25 27.6042C26.4375 27.6042 27.6042 26.4375 27.6042 25C27.6042 23.5625 26.4375 22.3958 25 22.3958Z" fill="{{ ($products->first()->jenisproduct->nama_kategori === "Masker")? '#FFF' : '#2E2E2E'}}"/>
                    </svg>                    
                <p>Lainnya</p>
            </div> --}}
        </div>
        @yield('container')   
    </div>
    @include('partials/footer')

</body>
</html>