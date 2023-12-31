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
                            <img src="assets/acc.svg" alt="" class="p-3 bg-success-500 rounded {{ ($user->status == "1")?'hidden':'show' }}">
                            <img src="assets/reject.svg" alt="" class="p-3 bg-danger-400 rounded {{ ($user->status == "1")?'hidden':'show' }}">                        
                            <div class="flex {{ ($user->status == "0")?'hidden':'show' }}">
                                <img src="assets/approve.svg" alt="" class="">  
                                <p class="text-success-500 ps-2">Terverifikasi</p>                      
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-2">
                        <div class="flex justify-center space-x-2.5">                    
                            <a href="edit_user" class="rounded bg-warning-500 text-btnmedium text-neutral-0 self-center py-2.5 px-4">Edit</a>
                            <form action="user/{{ $user}}" method="post">
                                @method('delete')
                                @csrf
                                <button class=" rounded bg-danger-500 text-btnmedium text-neutral-0 self-center py-2.5 px-4">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>       
@endsection