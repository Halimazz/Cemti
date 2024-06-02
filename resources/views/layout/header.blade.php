<header class="fixed top-0 w-full">
    <nav id="navBar" class="bg-green-600 w-full h-28 py-2 px-4 flex items-center justify-center grow-0">
        <div class="flex flex-row items-center py-2 py-4 grow w-full max-w-11xl ml-2">
            <a href="{{ url('') }}/">
                <div class="flex flex-col items-start justify-start">
                    <h3 class="text-white font-inter font-bold text-4xl">Robot</h3>
                    <div class="flex flex-row">
                        <h3 class="text-white font-inter font-bold text-4xl">Lintang</h3>
                        <p class="text-white ml-2">id</p>
                    </div>
                </div>
            </a>
            @if ($page == "Home") 
            <div id="brandName" class="grow flex flex-row justify-start items-center ml-8">
                <a href="{{ url('') }}/home">
                    <p class="font-inter text-3xl ml-8 text-gray-300 hover:text-gray-400 duration-200">Home</p>
                </a>
                <a href="{{ url('') }}/how">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">How it works?</p>
                </a>
                <a href="{{ url('') }}/about">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">About Us</p>
                </a>
            </div>
            <a href="{{ url('') }}/login">
                <div id="profileInterface" class="mr-2 flex flex-col items-center group cursor-pointer relative">
                    <div class="flex flex-row items-center">
                        <i class="fa-regular fa-user fa-2xl text-white group-hover:text-gray-300 duration-200"></i>
                    </div>
                </div>
            </a>
            @elseif ($page == "How")
            <div id="brandName" class="grow flex flex-row justify-start items-center ml-8">
                <a href="{{ url('') }}/home">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">Home</p>
                </a>
                <a href="{{ url('') }}/how">
                    <p class="font-inter text-3xl ml-8 text-gray-300 hover:text-gray-400 duration-200">How it works?</p>
                </a>
                <a href="{{ url('') }}/about">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">About Us</p>
                </a>
            </div>
            <a href="{{ url('') }}/login">
                <div id="profileInterface" class="mr-2 flex flex-col items-center group cursor-pointer relative">
                    <div class="flex flex-row items-center">
                        <i class="fa-regular fa-user fa-2xl text-white group-hover:text-gray-300 duration-200"></i>
                    </div>
                </div>
            </a>
            @elseif ($page == "About")
            <div id="brandName" class="grow flex flex-row justify-start items-center ml-8">
                <a href="{{ url('') }}/home">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">Home</p>
                </a>
                <a href="{{ url('') }}/how">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">How it works?</p>
                </a>
                <a href="{{ url('') }}/about">
                    <p class="font-inter text-3xl ml-8 text-gray-300 hover:text-gray-400 duration-200">About Us</p>
                </a>
            </div>
            <a href="{{ url('') }}/login">
                <div id="profileInterface" class="mr-2 flex flex-col items-center group cursor-pointer relative">
                    <div class="flex flex-row items-center">
                        <i class="fa-regular fa-user fa-2xl text-white group-hover:text-gray-300 duration-200"></i>
                    </div>
                </div>
            </a>
            @else
            <div id="brandName" class="grow flex flex-row justify-start items-center ml-8">
                <a href="{{ url('') }}/home">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">Home</p>
                </a>
                <a href="{{ url('') }}/how">
                    <p class="text-white font-inter text-3xl ml-8 hover:text-gray-300 duration-200">How it works?</p>
                </a>
                <a href="{{ url('') }}/about">
                    <p class="font-inter text-3xl ml-8 text-white hover:text-gray-300 duration-200">About Us</p>
                </a>
            </div>
            <a href="{{ url('') }}/login">
                <div id="profileInterface" class="mr-2 flex flex-col items-center group cursor-pointer relative">
                    <div class="flex flex-row items-center">
                        <i class="fa-regular fa-user fa-2xl text-white group-hover:text-gray-300 duration-200"></i>
                    </div>
                </div>
            </a>
            @endif
        </div>
    </nav>
</header>