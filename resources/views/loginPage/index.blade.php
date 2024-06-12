@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
    
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
               
<div class="w-full max-w-11xl mx-auto">
    <section class="bg-blue-100 ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl pt-20 font-semibold text-gray-900 dark:text-white">
                <img src="{{ url('') }}/assets/img/landing-page/cemti.webp" alt="" class="cemti_logo  transition-all duration-300 ease-in-out">
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-black md:text-2xl">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ url('') }}/loginProses" method="POST">
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
                            <label for="username" class="block mb-2 text-sm font-medium text-black">Your username</label>
                            <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  {{-- <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required=""> --}}
                                </div>
                                <div class="ml-3 text-sm">
                                  {{-- <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label> --}}
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                        
                    </form>
                </div>
            </div>
        </div>
      </section>
</div>
@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection