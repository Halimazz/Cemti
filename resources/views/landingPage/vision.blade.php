@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
<style>

.custom-shape {
        width: 100%;
        max-width: 400px;
        height: 80px; /* Tinggi lebih kecil */
        background-color: red;
        border-bottom-right-radius: 80px 80px; /* Menyesuaikan dengan tinggi baru */
        position: relative;
        padding-top: 1rem; /* Padding atas yang lebih kecil */
        padding-left: 1rem; /* Padding kiri yang lebih kecil */
        animation: slideInFromLeft 1s ease-out forwards; /* Menambahkan animasi */
    }

    .custom-shape h1 {
        position: absolute;
        top: 0.5rem; /* Menyesuaikan dengan padding atas pada custom-shape */
        left: 1rem; /* Menyesuaikan dengan padding kiri pada custom-shape */
        color: black;
        font-size: 3rem;
        font-weight: bold;
        margin: 0.5rem;
        opacity: 0; /* Mulai sebagai tidak terlihat */
        animation: opacityh1 0.5s ease-out forwards;
        animation-delay: 1s; /* Menunda animasi sampai slideInFromLeft selesai */
    }
    .need-border {
        /* margin : 10px;    */
        border : 5px solid red;
    }

    .garis-img {
            border-width: 4px;
            border-color: black;
            padding: 18px; /* Equivalent to p-3 in Tailwind */
            border-top-left-radius: 35px;
            border-bottom-right-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-left-radius: 10px;
            position: relative;
            display: inline-block;
        }

    @keyframes slideInFromLeft {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes opacityh1 {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    .shape-line {
        width: 100%;
        max-width: 15px;
        height: 290px; /* Tinggi lebih kecil */
        background-color: red;
        border-bottom-right-radius: 80px 80px; /* Menyesuaikan dengan tinggi baru */
        position: relative;
        padding-top: 1rem; /* Padding atas yang lebih kecil */
        padding-left: 1rem; /* Padding kiri yang lebih kecil */
       
    }
    .shape-title {
       
        border-bottom-left-radius: 70px 80px; /* Menyesuaikan dengan tinggi baru */
       
    }
</style>
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
               
<div class="w-full max-w-11xl mx-auto">
    <div class="ushape bg-white pt-40 pl-12 ">
        
    </div>
    <div class="custom-shape">
        <h1 class="text-black  text-5xl font-bold">Vision</h1>
    </div>
    <article id="lintangDef" class="py-6">
        @foreach ($images as $index => $image)
            <div class="flex place-items-center p-1 w-11/12 justify-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="w-full flex justify-center">
                    <div class="w-screen p-6 rounded-lg shadow-lg">
                        <div class="flex items-center justify-between">
                            <div class="p-4 rounded-lg flex items-center justify-center relative">
                                <div class="garis-img">
                                    <img src="{{ asset('storage/' . $image->image) }}" alt="Image" class="object-cover h-64 w-full rounded-lg">
                                </div>
                                <div class="absolute top-4 right-4 bg-red-500 p-2 shape-title flex items-center justify-center">
                                    <p class="text-black text-center text-xl pl-3" style="font-family: 'Lokanova'; font-weight: bold;">
                                        {{ $image->title }}
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="absolute top-4 right-4 bg-red-500 p-2 rounded">DD</div> --}}
                            <div class="shape-line"></div>
                            <div class="w-9/12 mt-4 p-8 rounded-lg" 
                                data-aos="fade-left"
                                data-aos-anchor="#example-anchor"
                                data-aos-offset="500"
                                data-aos-duration="500"
                                data-aos-delay="{{ $index * 120 }}">
                                <p class="border-x-0 border-red-300 text-justify text-black" style="font-family: 'Lora';">{{ $image->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </article>
    
</div>
@endsection
    
@section('footer')

    @include('layout.footer')

@endsection

@section('js-custom')

@endsection