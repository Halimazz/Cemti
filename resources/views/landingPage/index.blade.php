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
        <article id="lintangDef" class="my-56">
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
            <div class="flex flex-row h-auto justify-between gap-12">
                {{-- <img id="headerImage" class="w-1/2" src="{{ url('') }}/assets/img/landing-page/robot-lintang-landscape.webp" alt=""> --}}
                <div class="flex flex-col justify-start grow">
                    <div class="flex flex-col">
                        <h1 class="text-10xl font-inter font-extrabold text-blue-100">CEMTI</h1>
                        <div class="flex flex-row">
                            <h1 class="text-10xl font-inter font-extrabold text-blue-100">Prodi Biomeis</h1>
                            <h6 class="text-6xl ml-4 font-inter text-blue-100">ID</h6>
                        </div>
                        <div class="mt-16">
                            <p class="leading-normal text-3xl text-justify text-blue-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam incidunt, corporis veniam repudiandae amet quos nisi quaerat eveniet nihil earum, beatae praesentium tempora velit quae aspernatur dignissimos, soluta libero optio voluptate ab et! Optio provident distinctio tempore, ipsum dicta possimus. Amet rem est quae. Dolore unde accusamus adipisci ipsum autem aliquam, ipsa iusto saepe, animi ex repellendus assumenda et quod quae sit, incidunt ab dolor doloremque esse modi omnis nesciunt porro dolorem. Illo, sed facilis ut alias odio aperiam nulla ratione cumque repudiandae provident. Officiis distinctio at iusto earum nam dolorem quaerat, iure commodi ratione nulla, voluptates nisi voluptatibus quas. </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article id="stuntingDef" class="my-56">
            <div class="flex flex-row justify-between gap-12 h-full">
                <div class="flex flex-col justify-start grow">
                    <div class="flex flex-col">
                        <h1 class="text-9xl text-right font-inter font-extrabold">Apa itu</h1>
                        <div class="flex flex-row justify-end">
                            <h1 class="text-9xl text-right font-inter font-extrabold">Stunting?</h1>
                        </div>
                        <div class="mt-16">
                            <p class="leading-normal text-3xl justify-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas facere a magni qui doloremque neque praesentium tempore blanditiis saepe error, nostrum incidunt labore vero. Velit eaque aliquam repudiandae quaerat ut consectetur omnis, accusamus debitis eos quis labore libero perspiciatis. Labore?</p>
                        </div>
                    </div>
                </div>
                <img id="headerImage" class="w-1/2 h-auto" src="{{ url('') }}/assets/img/landing-page/stunting-image.webp" alt="">
            </div>
        </article>
        <article id="stuntingSolve" class="w-full my-56">
            <div class="w-full flex flex-row justify-between gap-12 h-full">
                <img id="headerImage" class="w-1/2 h-auto" src="{{ url('') }}/assets/img/landing-page/feeding-kids.webp" alt="">
                <div class="flex flex-col justify-start grow">
                    <div class="flex flex-col">
                        <h1 class="text-8xl font-inter font-extrabold">Bagaimana cara</h1>
                        <div class="flex flex-row">
                            <h1 class="text-8xl font-inter font-extrabold">Penanganan Stunting?</h1>
                        </div>
                        <div class="mt-16">
                            <p class="leading-normal text-3xl text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas facere a magni qui doloremque neque praesentium tempore blanditiis saepe error, nostrum incidunt labore vero. Velit eaque aliquam repudiandae quaerat ut consectetur omnis, accusamus debitis eos quis labore libero perspiciatis. Labore?</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <center>
    <div class="place-content-center p-md-5">
        <a href="{{ route('dashboard-post.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add Image And Description
            </button>
        </a>
    </center>
@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection