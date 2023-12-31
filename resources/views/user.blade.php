@extends('admin.layout')

@section('container')
<div class="flex justify-between mb-7">
    <h1 class="text-headline1">Data User</h1>
    <a href="tambah_user" class="rounded bg-primary-500 text-btnmedium text-neutral-0 py-2.5 px-4 self-center">Tambah</a>
</div>
<div>
    <table class="table-auto max-w-full ">
        <thead class="bg-primary-25 text-headline4">
            <tr>
                <th class="py-[1.19rem] px-[0.81rem] rounded-s">Id User</th>
                <th class="py-[1.19rem] px-[0.81rem]">Nama</th>
                <th class="py-[1.19rem] px-[0.81rem]">Nomer telp</th>
                <th class="py-[1.19rem] px-[0.81rem]">Email</th>
                <th class="py-[1.19rem] px-[0.81rem]">Status</th>
                <th class="py-[1.19rem] px-[0.81rem] rounded-e">Action</th>
            </tr>
        </thead>
        <tbody class="text-center text-body1">
            @foreach ($users as $user)
                <tr class="border-b-[1px] border-primary-50">
                    <td class="px-5">{{ $user->id_user }}</td>
                    <td class="px-5">{{ $user->nama_user }}</td>
                    <td class="px-5">{{ $user->no_telp }}</td>
                    <td class="px-5">{{ $user->email }}</td>
                    <td class="px-5">
                        <div class="flex justify-center space-x-2.5">
                            {{-- <form action="/verif_akun/{{ $user->id_user }}" method="post">
                                @method('put')
                                @csrf
                                <button class="cursor-pointer"  onclick="edit()"><img src="assets/acc.svg" alt="" class="p-3 bg-success-500 rounded {{ ($user->status == "1")?'hidden':'show' }}"></button>
                            </form> --}}
                            <a data-user-id="{{ $user->id_user }}" class="openVerifModal cursor-pointer"  onclick="edit()"><img src="assets/acc.svg" alt="" class="p-3 bg-success-500 rounded {{ ($user->status == "1")?'hidden':'show' }}"></a>
                            <img src="assets/reject.svg" alt="" class="p-3 bg-danger-400 rounded {{ ($user->status == "1")?'hidden':'show' }}">                        
                            <div class="flex {{ ($user->status == "0")?'hidden':'show' }}">
                                <img src="assets/approve.svg" alt="" class="">  
                                <p class="text-success-500 ps-2">Terverifikasi</p>                      
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-2">
                        <div class="flex justify-center space-x-2.5">                    
                            <a href="edit_user/{{ $user->id_user }}" class="rounded bg-warning-500 text-btnmedium text-neutral-0 self-center py-2.5 px-4">Edit</a>
                            <a data-user-id="{{ $user->id_user }}" class="openDelModal cursor-pointer rounded bg-danger-500 text-btnmedium text-neutral-0 self-center py-2.5 px-4">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- VERIF MODAL --}}
    <form action="/verif_akun/" method="post">
        @csrf
        @method('put')        
        
            {{-- START VERIF MODAL --}}
            <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="verifModal">
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
                                    <input type="text" hidden name="id_user" id="id_user">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Verification Account
                                        </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500" id="verifConfirmation"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Verification
                            </button>
                            <button class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                <a href="" class="closeVerifModal">Cancel</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{--verif MODAL --}}

    </form>  

    {{-- DEL MODAL --}}
    <form action="/delete_user/" method="post">
        @csrf
        @method('delete')        
        
            {{-- START DELETE MODAL --}}
            <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="deleteModal">
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
                                    <input type="text" hidden name="id_user" id="id_user">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Delete Account
                                        </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500" id="deleteConfirmation"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Delete
                            </button>
                            <button class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                <a href="" class="closeDelModal">Cancel</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END DELETE MODAL --}}

    </form>    


</div>  

{{-- SCRIPT VERIF USER --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('.openVerifModal').on('click', function(e){
            e.preventDefault();
            
            // ambil data dari button
            var userId = $(this).data('user-id');
            
            
            // isi hidden input
            $('#id_user').val(userId);
            
             // Perbarui pesan konfirmasi dalam modal
             $('#verifConfirmation').text("Are you sure you want to verification user with id " + userId + "? All data will be permanently removed. This action cannot be undone.");
            
            // tampilkan modal
            $('#verifModal').removeClass('invisible');
        });

        $('.closeVerifModal').on('click', function(e){
            // tutub modal
            $('#verifModal').addClass('invisible');
        });
    });
</script>  

{{-- SCRIPT DELETE USER --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('.openDelModal').on('click', function(e){
            e.preventDefault();
            
            // ambil data dari button
            var userId = $(this).data('user-id');
            
            
            // isi hidden input
            $('#id_user').val(userId);
            
             // Perbarui pesan konfirmasi dalam modal
             $('#deleteConfirmation').text("Are you sure you want to delete user with id " + userId + "? All data will be permanently removed. This action cannot be undone.");
            
            // tampilkan modal
            $('#deleteModal').removeClass('invisible');
        });

        $('.closeDelModal').on('click', function(e){
            // tutub modal
            $('#deleteModal').addClass('invisible');
        });
    });
</script>     
@endsection