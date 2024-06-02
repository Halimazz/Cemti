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
            <div class="flex flex-row h-auto justify-between gap-12">
                <img id="headerImage" class="w-1/2" src="{{ url('') }}/assets/img/landing-page/robot-lintang-landscape.webp" alt="">
                <div class="flex flex-col justify-start grow">
                    <div class="flex flex-col">
                        <h1 class="text-10xl font-inter font-extrabold">Robot</h1>
                        <div class="flex flex-row">
                            <h1 class="text-10xl font-inter font-extrabold">Lintang</h1>
                            <h6 class="text-6xl ml-4 font-inter">ID</h6>
                        </div>
                        <div class="mt-16">
                            <p class="leading-normal text-3xl text-justify">Robot stunting adalah trobosan terbaru yang memadukan antara micro controller sebagai media penimbang dan website sebagai analis dan storage data yang dapat membantu tenaga kesehatan dan orang tua dalam menangani masalah stunting </p>
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
@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection