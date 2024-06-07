<style>
    /* Custom CSS for navbar shrink effect */
    .navbar-shrink {
        height: 50px;
    }
    .navbar-shrink nav {
        height: 50px;
        opacity: 0.8;
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
    #navbar, #navbar nav, #navbar h3, #navbar p, #navbar img {
        transition: all 0.3s ease-in-out;
        /* opacity: 0.8; */
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
    .cemti_logo{
        height: 202.5px;
    }
</style>




<header class="fixed top-0 w-full transition-all duration-300 ease-in-out" id="navbar">
    <nav class="bg-red-800 w-full h-28 py-2 px-4 flex items-center justify-between grow-0">
        <div class="flex flex-row items-center py-2 grow w-full max-w-11xl  ml-2">
            <a href="{{ url('/') }}">
                <div class="flex flex-col items-start justify-start h">
                    <img src="{{ url('') }}/assets/img/landing-page/cemti_m.webp" alt="" class="cemti_logo transition-all duration-300 ease-in-out">
                </div>
            </a>
        </div>
        <div id="brandName" class="flex flex-row justify-end">
            <a href="{{ url('home') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'Home' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Home</p>
            </a>
            <li id="menu-item-73544" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="About Us" href="#" data-toggle="dropdown" data-type="title"><p class="font-inter text-lg ml-8  {{ $page == 'About us' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">About Us <i class=" fa fa-angle-down fa-dropdown"></i></p> </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Vision" href="{{ url('vision') }}">Vision</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Strategy" href="{{ url('strategy') }}">Strategy</a>
                    </li>
                    <li id="menu-item-81984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81984">
                        <a title="Target" href="#">Target</a>
                    </li>
                    <li id="menu-item-81980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81980">
                        <a title="Organization" href="#">Organization</a>
                    </li>
                </ul>
            </li>
            <li id="menu-item-73544" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Cluster" href="#" data-toggle="dropdown" data-type="title"><p class="font-inter text-lg ml-8  {{ $page == 'Cluster' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Cluster <i class=" fa fa-angle-down fa-dropdown"></i></p> </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81961" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81961">
                        <a title="Medical Instrumental" href="-the-board/">Medical Instrumental<i class="fa fa-angle-right fa-dropdown"></i></a>
                        <ul role="menu" class="drop-menu">
                            <li><a title="Capstone" href="-the-board/">Capstone</a></li>
                            <li><a title="Capstone" href="-the-board/">Reaserch Drant</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Vision" href="#">Medical Rehabilitation</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Strategy" href="#">Medical Image Processing</a>
                    </li>
                </ul>
            </li>
            <a href="{{ url('facilities') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'Facilities' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Facilities</p>
            </a>
            
            <li id="menu-item-73544" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Servieces" href="#" data-toggle="dropdown" data-type="title"><p class="font-inter text-lg ml-8  {{ $page == 'Servieces' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Servieces <i class=" fa fa-angle-down fa-dropdown"></i></p> </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Education/Training" href="#">Education/Training</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Product Development" href="#">Product Development</a>
                    </li>
                    <li id="menu-item-81984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81984">
                        <a title="Sales" href="#">Sales</a>
                    </li>
                    <li id="menu-item-81980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81980">
                        <a title="Consulting" href="#">Consulting</a>
                    </li>
                </ul>
            </li>
            <li id="menu-item-73544" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-73544 dropdown menu-item-link w-32" style="list-style-type: none">
                <a title="Products" href="#" data-toggle="dropdown" data-type="title"><p class="font-inter text-lg ml-8  {{ $page == 'Products' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Products <i class=" fa fa-angle-down fa-dropdown"></i></p> </a>
                <ul role="menu" class="drop-menu">
                    <li id="menu-item-81966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81966">
                        <a title="Vision" href="#">Capstone</a>
                    </li>
                    <li id="menu-item-81972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81972">
                        <a title="Strategy" href="#">Commercil</a>
                    </li>
                </ul>
            </li>
            <a href="{{ url('event') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'Event' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Event</p>
            </a>
            <a href="{{ url('news') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'News' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">News</p>
            </a>
            <a href="{{ url('cluster') }}">
                <p class="font-inter text-lg ml-8 {{ $page == 'How' ? 'text-gray-300' : 'text-white hover:text-gray-300 duration-200' }}">Cluster</p>
            </a>
        </div>
        
        <a href="{{ url('login') }}" class="ml-8">
            <div id="profileInterface" class="mr-2 flex flex-col items-center group cursor-pointer relative">
                <div class="flex flex-row items-center">
                    <i class="fa-regular fa-user fa-2xl text-white group-hover:text-gray-300 duration-200"></i>
                </div>
            </div>
        </a>
    </nav>
</header>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-shrink');
        } else {
            navbar.classList.remove('navbar-shrink');
        }
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
</script>

