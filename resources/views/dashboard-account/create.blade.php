@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
    
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
<div class="pb-9 pt-28 w-full max-w-7xl mx-auto">
    <section class="bg-blue-100 min-h-screen flex items-center justify-center py-8">
        <div class="w-full max-w-md">
            <h1 class="text-2xl font-bold text-center mb-6">Create User Account</h1>
            <form class="space-y-6" action="{{ route('dashboard-account.store') }}" method="POST">
                <!-- Alert for errors -->
                @if(session('gagal'))
                <div class="bg-red-500 text-white font-bold rounded-lg px-4 py-2 mb-4">
                    {{ session('gagal') }}
                </div>
                @endif
                @if(session('sukses'))
                <div class="bg-green-500 text-white font-bold rounded-lg px-4 py-2 mb-4">
                    {{ session('sukses') }}
                </div>
                @endif
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Password">
                    @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700">User Role</label>
                    <select id="role" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="role" required>
                        <option value="">Select Role</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                    @error('role')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button class="w-full bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" type="submit">Create Account</button>
                </div>
            </form>                
        </div>
    </section>
</div>
@endsection

@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection