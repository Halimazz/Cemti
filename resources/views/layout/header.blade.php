<style>
    /* Custom CSS for navbar shrink effect */
    .navbar-shrink {
        height: 50px;
    }

    .navbar-shrink nav {
        height: 50px;
    }

    .navbar-shrink h3 {
        font-size: 1.5rem; /* Adjust font size */
    }

    .navbar-shrink p {
        font-size: 1rem; /* Adjust font size */
    }

    .navbar-shrink img {
        height: 90px; /* Adjust image size */
    }

    .navbar-shrink #profile {
        height: 38px; /* Adjust image size */
    }

    #navbar, #navbar nav, #navbar h3, #navbar p, #navbar img, #profile {
        transition: all 0.3s ease-in-out;
    }

    .list-shrink {
        margin-top: 0px;
        transition: all 0.3s ease-in-out;
         /* Set margin-top to 20px */
    }

    .list-off{
        margin-top: 5px; /* Set margin-top to 20px */
    }

    .list {
        transition: all 0.3s ease-in-out;
    }


    

    /* Basic styling */
    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li {
        position: relative;
    }

    /* Styling for dropdown menu */
    .dropdown .drop-menu,
    .drop-menu .drop-menu {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .dropdown:hover > .drop-menu,
    .drop-menu li:hover > .drop-menu {
        display: block;
    }

    /* Dropdown link styles */
    .dropdown-toggle {
        cursor: pointer;
        display: block;
        padding: 10px;
        text-decoration: none;
        color: black;
        background-color: #f8f8f8;
    }

    .dropdown-toggle:hover {
        background-color: #e7e7e7;
    }

    .drop-menu li a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: black;
        background-color: white;
    }

    .drop-menu li a:hover {
        background-color: #e7e7e7;
    }

    .drop-menu .drop-menu {
        left: 100%;
        top: 0;
    }
    .cemti_logo {
        height: 165.5px;
    }
    .div_logo {
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>




<header class="fixed top-0 w-full transition-all duration-300 ease-in-out z-10" id="navbar">
    <nav class="bg-red-800 w-full h-28  flex items-center justify-start grow-0">
        <div class="flex items-start div_logo grow-0">
            <a href="{{ url('/') }}">
                <div class="flex justify-item-start w-100">
                    <img src="{{ url('') }}/assets/img/landing-page/cemti_6.webp" alt="" class="cemti_logo transition-all duration-300 ease-in-out">
                </div>
            </a>
        </div>
        <div id="brandName" class="flex flex-row justify-item-end">
            <a href="{{ url('home') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'Home' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Home</p>
            </a>
            <li id="menu-item-73544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="About Us" href="#" data-toggle="dropdown" data-type="title">
                    <p class="font-inter text-lg ml-8 {{ $page == 'About us' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">About Us <i class="fa fa-angle-down fa-dropdown"></i></p>
                </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Vision" href="{{ url('vision') }}">Vision</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Strategy" href="{{ url('strategy') }}">Strategy</a>
                    </li>
                    <li id="menu-item-81984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81984">
                        <a title="Target" href="{{ url('target') }}">Target</a>
                    </li>
                    <li id="menu-item-81980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81980">
                        <a title="Organization" href="{{ url('organization') }}">Organization</a>
                    </li>
                </ul>
            </li>
            <li id="menu-item-73544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Cluster" href="#" data-toggle="dropdown" data-type="title">
                    <p class="font-inter text-lg ml-8 {{ $page == 'Cluster' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Cluster <i class="fa fa-angle-down fa-dropdown"></i></p>
                </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81961" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81961">
                        <a title="Medical Instrumental" href="-the-board/">Medical Instrumental<i class="fa fa-angle-right fa-dropdown"></i></a>
                        <ul role="menu" class="drop-menu">
                            <li><a title="Capstone" href="{{ url('capstone') }}">Capstone</a></li>
                            <li><a title="Capstone" href="{{ url('research-drant') }}">Reaserch Drant</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Medical Rehabilitation" href="{{ url('cluster-medical-rehabilitation') }}">Medical Rehabilitation</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Medical Image Processing" href="{{ url('cluster-medical-image-processing') }}">Medical Image Processing</a>
                    </li>
                </ul>
            </li>
            <a href="{{ url('facilities') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'Facilities' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Facilities</p>
            </a>
            
            <li id="menu-item-73544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Servieces" href="#" data-toggle="dropdown" data-type="title">
                    <p class="font-inter text-lg ml-8 {{ $page == 'Servieces' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Services <i class="fa fa-angle-down fa-dropdown"></i></p>
                </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Education/Training" href="{{ url('servieces-education') }}">Education/Training</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Product Development" href="{{ url('servieces-product') }}">Product Development</a>
                    </li>
                    <li id="menu-item-81984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81984">
                        <a title="Sales" href="{{ url('servieces-sales') }}">Sales</a>
                    </li>
                    <li id="menu-item-81980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81980">
                        <a title="Consulting" href="{{ url('servieces-consulting') }}">Consulting</a>
                    </li>
                </ul>
            </li>
            <li id="menu-item-73544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Products" href="#" data-toggle="dropdown" data-type="title">
                    <p class="font-inter text-lg ml-8 {{ $page == 'Products' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Products <i class="fa fa-angle-down fa-dropdown"></i></p>
                </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Vision" href="{{ url('capstone') }}">Capstone</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Commercil" href="{{ url('products-commercil') }}">Commercil</a>
                    </li>
                </ul>
            </li>
            <a href="{{ url('event') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'Event' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Event</p>
            </a>
            <a href="{{ url('news') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'News' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">News</p>
            </a>
            {{-- @if (session()->get('isLogin') == 1)
            <li id="menu-item-73544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Servieces" href="#" data-toggle="dropdown" data-type="title">
                    <p class="font-inter text-lg ml-8 {{ $page == 'Servieces' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Add <i class="fa fa-angle-down fa-dropdown"></i></p>
                </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Education/Training" href="{{ route('dashboard-post.index') }}">Image</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Product Development" href="{{ route('dashboard-account.index') }}">Account</a>
                    </li>
                </ul>
            </li>
            @endif --}}
        </div>
        <div id="profile" class="flex items-center space-x-2 bg-red-500 p-3 ml-9 rounded-lg">
            <a href="{{ url('login') }}">
                <div id="profileInterface" class=" flex flex-col items-center group cursor-pointer relative">
                    <div class="flex flex-row items-center">
                        <i class="fa-regular fa-user fa-2xl text-white group-hover:text-gray-300 duration-200"></i>
                    </div>
                </div>
            </a>
            @if (session()->get('isLogin') == 1)
            <div class="dropdown relative">
                <li id="menu-item-73544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-38" style="list-style-type: none">
                    <p class="font-inter text-lg ml-3 {{ $page == 'Servieces' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">
                        {{ session()->get('username') }} 
                        <i class="fa fa-angle-down fa-dropdown"></i>
                    </p>
                    <ul role="menu" class="drop-menu">
                        <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">
                                Profile
                            </a>
                        </li>
                        <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">
                                Settings
                            </a>
                        </li>
                        <li id="menu-item-81961" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81961">
                            <a title="Servieces" href="#" data-toggle="dropdown" data-type="title">
                                <p class="font-inter text-lg ml-8 text-black">Add <i class="fa fa-angle-down fa-dropdown"></i></p>
                            </a>
                            <ul role="menu" class="drop-menu">
                                <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                                    <a title="Education/Training" href="{{ route('dashboard-post.index') }}">Image</a>
                                </li>
                                <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                                    <a title="Product Development" href="{{ route('dashboard-account.index') }}">Account</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}">
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </div>            
                @endif
        </div>
        
    </nav>
    <div class="list w-full bg-gradient-to-r from-red-600 via-red-500 to-rose-800 h-4 flex justify-start" style="">
    </div>
</header>


<script>
   document.addEventListener('DOMContentLoaded', function() {
    const listElement = document.querySelector('.list');
    listElement.classList.add('list-off'); // Tambahkan class list-off saat halaman pertama kali dimuat

    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');

        if (window.scrollY > 50) {
            navbar.classList.add('navbar-shrink');
            listElement.classList.add('list-shrink'); // Tambahkan class list-shrink saat scroll ke bawah
            listElement.classList.remove('list-off'); // Hapus class list-off saat scroll ke bawah
        } else {
            navbar.classList.remove('navbar-shrink');
            listElement.classList.remove('list-shrink'); // Hapus class list-shrink saat kembali ke atas
            listElement.classList.add('list-off'); // Tambahkan class list-off saat kembali ke atas
        }
    });
});



    document.addEventListener('DOMContentLoaded', function() {
        var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                var dropdown = this.parentElement;
                var dropdownMenu = dropdown.querySelector('.drop-menu');
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });
        });

        document.addEventListener('click', function(e) {
            dropdownToggles.forEach(function(toggle) {
                var dropdown = toggle.parentElement;
                var dropdownMenu = dropdown.querySelector('.drop-menu');

                if (!dropdown.contains(e.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    });

    document.querySelector('.dropdown').addEventListener('click', function(event) {
        const menu = this.querySelector('.dropdown-menu');
        menu.classList.toggle('hidden');
    });
</script>

