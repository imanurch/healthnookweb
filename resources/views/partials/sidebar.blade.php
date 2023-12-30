<div class="w-72 h-screen shadow-btnshadow">
    <div class="px-6 mt-14">
        <div class="flex">
            <img src="assets/logo.svg" alt="">
            <p class="text-headline2 self-center ps-2"><span class="text-primary-500">Health</span>Nook</p>
        </div>
    </div>

    <nav class="mt-10">
        <div>
            <a href="dashboard.php" class="w-full flex justify-between items-center py-3 px-6 text-neutral-700 cursor-pointer hover:bg-primary-25  hover:text-neutral-700 focus:outline-none ">
                <span class="flex items-center">
                    <img src="assets/home.svg" alt="">
                    <span class="mx-4 font-medium ">Dashboard</span>
                </span>
            </a>
        </div>

        <div x-data="{ open: false }">
            <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-neutral-700 cursor-pointer hover:bg-primary-25 hover:text-neutral-700 focus:outline-none ">
                <span class="flex items-center">
                    <img src="assets/note.svg" alt="">

                    <span class="mx-4 font-medium">Manage Data</span>
                </span>

                <span>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </button>

            <div x-show="open" class="bg-primary-25">
                <a class="py-2 px-16 block text-sm text-neutral-700 hover:bg-blue-500 hover:text-white" href="user.php">User</a>
                <a class="py-2 px-16 block text-sm text-neutral-700 hover:bg-blue-500 hover:text-white" href="product.php
                ">Product</a>
            </div>
        </div>

        <div class="flex justify-center mt-14"> 
            <button class="text-neutral-0 bg-danger-500 rounded shadow-btnshadow w-64 py-2.5">Keluar</button>
        </div>
    </nav>
</div>