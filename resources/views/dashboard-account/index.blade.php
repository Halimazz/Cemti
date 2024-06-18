@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
    <style>
        article > img {
            object-fit: cover;
        }

        .justify-right {
            text-align: justify;
            text-align-last: right;
        }
    </style>
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
    <div class="w-full max-w-11xl mx-auto">
        <center>
            <div id="lintangDef" class="place-content-center my-36">
                <a href="{{ route('dashboard-account.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add Account
                    </button>
                </a>
            </center>
        
        <div id="lintangDef" class="my-56">
            <!-- alert modal -->
            @if (session()->has('sukses') || session()->has('gagal'))
                        <div id="alertModal" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
                            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md mx-auto">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-bold">
                                        {{ session()->has('sukses') ? 'Success' : 'Error' }}
                                    </h2>
                                    <button class="ml-2 text-black" onclick="closeAlert()">x</button>
                                </div>
                                <div class="mt-4">
                                    <p class="{{ session()->has('sukses') ? 'text-green-500' : 'text-red-500' }}">
                                        {{ session('sukses') ?? session('gagal') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- end alert modal -->
                    <div class="my-5">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th> 
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($mUsers as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->username }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->role->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href=" " class="text-red-600 hover:text-red-900" title="Hapus Data">Hapus</a>
                                            <form id=" " action="" method="POST" class="hidden">@csrf</form>
                                            <a href=" " class="text-blue-600 hover:text-blue-900 ml-4" title="Ubah Data">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
        </div>
    </div>
    
@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection