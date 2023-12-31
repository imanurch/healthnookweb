<div class="w-72 h-screen shadow-btnshadow">
    <div class="px-6 mt-14">
        <div class="flex">
            <img src="assets/logo.svg" alt="">
            <p class="text-headline2 self-center ps-2"><span class="text-primary-500">Health</span>Nook</p>
        </div>
    </div>

    <nav class="mt-10">
        <div>
            <a href="dashboard" class="w-full flex justify-between items-center py-3 px-6 text-neutral-700 cursor-pointer hover:bg-primary-25  hover:text-neutral-700 focus:outline-none ">
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
                <a class="py-2 px-16 block text-sm text-neutral-700 hover:bg-blue-500 hover:text-white" href="user">User</a>
                <a class="py-2 px-16 block text-sm text-neutral-700 hover:bg-blue-500 hover:text-white" href="product
                ">Product</a>
            </div>
        </div>

        <div class="flex justify-center mt-14"> 
            <button class="openLogoutModal text-neutral-0 bg-danger-500 rounded shadow-btnshadow w-64 py-2.5">Keluar</button>
        </div>

        {{-- START LOGOUT MODAL --}}
        <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="logoutModal">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Logout
                                    </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500" id="logoutConfirmation"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            <a href="/" class="closeLogoutModal">Logout</a>
                        </button>
                        <button class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            <a href="" class="closeLogoutModal">Cancel</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>   
    </nav>
</div>

{{-- SCRIPT LOGOUT USER --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('.openlogoutModal').on('click', function(e){
            // e.preventDefault();
                    
             // Perbarui pesan konfirmasi dalam modal
             $('#logoutConfirmation').text("Are you sure you want to Logout? This action cannot be undone.");
            
            // tampilkan modal
            $('#logoutModal').removeClass('invisible');
        });

        $('.closelogoutModal').on('click', function(e){
            // tutub modal
            $('#logoutModal').addClass('invisible');
        });
    });
</script>  