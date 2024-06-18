@extends('layout.main')

@section('css-library')

@endsection

@section('css-custom')
    <style>
         @font-face {
            font-family: 'Lokanova';
            src: url('assets/fonts/Lokanova Std.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
        article > img {
            object-fit: cover;
        }

        .justify-right {
            text-align: justify;
            text-align-last: right;
        }
        #header-image {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('header')

    @include('layout.header')

@endsection

@section('content')
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
        <div class="flex flex-row h-auto justify-between mt-28 gap-12 items-start">
            <img id="headerImage"
                class="object-contain w-1/2"
                src="{{ url('') }}/assets/img/landing-page/gedung-i.webp"
                alt="" data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">
        
            <article id="lintangDef" class="my-4 flex-grow" data-aos="fade-left"
                data-aos-anchor-placement="top-bottom"
                data-aos-offset="200"
                data-aos-duration="400"
                data-aos-easing="easing-in-sine">
                <div class="flex flex-col">
                    <h1 class="text-6xl font-inter font-extrabold text-black" style="font-family: 'Lokanova';">CEMTI</h1>
                    <div class="flex flex-row items-baseline">
                        <h1 class="text-6xl font-inter font-extrabold text-black" style="font-family:'Lokanova';">Prodi Biomeis</h1>
                        <h6 class="text-3xl ml-4 font-inter text-black" style="font-family:'Lokanova';">ID</h6>
                    </div>
                    <div class="mt-16">
                        <p class="leading-normal text-xl text-justify text-black" style="font-family:Lora;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, labore laudantium voluptatibus iusto totam nobis veritatis aut explicabo doloribus inventore quia reiciendis maiores nemo necessitatibus autem veniam unde quod harum. Earum officia veritatis distinctio quasi labore. Commodi similique vero cumque voluptate molestias veniam, error quibusdam et quaerat quos sint cupiditate, facilis eaque nihil modi expedita aperiam. Harum quos nemo ipsam incidunt, quae officia fugiat odit maiores sunt! Impedit sed laboriosam ex laborum fugiat, blanditiis nemo debitis labore consequuntur. Possimus odit ut, dolores eum officia nihil sunt, exercitationem alias voluptatibus atque soluta obcaecati ipsam quis dignissimos. Suscipit quis fugit veniam non.
                        </p>
                    </div>
                </div>
            </article>
        </div>
        
        <article id="stuntingDef" class="my-20" data-aos="fade-left"
            data-aos-anchor="#stuntingDef"
            data-aos-anchor-placement="top-bottom"
            data-aos-offset="200"
            data-aos-duration="500"
            data-aos-delay="400">
            <div class="flex flex-row justify-between gap-12 h-full">
                <div class="flex flex-col justify-start grow">
                    <div class="flex flex-col">
                        <h1 class="text-6xl text-right font-inter font-extrabold">Apa itu</h1>
                        <div class="flex flex-row justify-end">
                            <h1 class="text-6xl text-right font-inter font-extrabold">Stunting?</h1>
                        </div>
                        <div class="mt-16">
                            <p class="leading-normal text-3xl justify-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas facere a magni qui doloremque neque praesentium tempore blanditiis saepe error, nostrum incidunt labore vero. Velit eaque aliquam repudiandae quaerat ut consectetur omnis, accusamus debitis eos quis labore libero perspiciatis. Labore?</p>
                        </div>
                    </div>
                </div>
                <img id="headerImage" class="w-1/2 h-auto" src="{{ url('') }}/assets/img/landing-page/stunting-image.webp" alt="" data-aos="fade-right"
                data-aos-anchor="#stuntingDef"
                data-aos-anchor-placement="top-bottom"
                data-aos-offset="200"
                data-aos-duration="500"
                data-aos-delay="600">
            </div>
        </article>               
        <article id="stuntingSolve" class="w-full mt-5 mb-28" data-aos="fade-left"
                data-aos-anchor="#stuntingSolve"
                data-aos-anchor-placement="top-bottom"
                data-aos-offset="200"
                data-aos-duration="500"
                data-aos-delay="400">
            <div class="w-full flex flex-row justify-between gap-12 h-full" data-aos="fade-right"
                data-aos-anchor="#stuntingSolve"
                data-aos-anchor-placement="top-bottom"
                data-aos-offset="200"
                data-aos-duration="500"
                data-aos-delay="600">
                <img id="headerImage" class="w-1/2 h-auto" src="{{ url('') }}/assets/img/landing-page/feeding-kids.webp" alt="">
                <div class="flex flex-col justify-start grow">
                    <div class="flex flex-col">
                        <h1 class="text-4xl font-inter font-extrabold">Bagaimana cara</h1>
                        <div class="flex flex-row">
                            <h1 class="text-4xl font-inter font-extrabold">Penanganan Stunting?</h1>
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