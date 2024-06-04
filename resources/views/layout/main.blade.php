<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ba0903e616.js" crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <link href="{{ url('assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Morris Chart -->
    <link href="{{ url('assets/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- jvectormap -->
    <link href="{{ url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- fullCalendar -->
    <link href="{{ url('assets/css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Daterange picker -->
    <link href="{{ url('assets/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Bootstrap WYSIHTML5 - Text Editor -->
    <link href="{{ url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />

    <!-- MQTT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
    
    <!-- Tailwind CSS (Optional, if using Vite) -->
    @vite('resources/css/app.css')
    
    @yield('css-library')
    @yield('css-custom')
</head>
<body class="skin-black h-screen relative flex flex-col">

    @yield('header')

    <div class="flex-grow">
        @yield('content')
    </div>

    @yield('footer')
    
    <!-- Modules JS -->
    <script src="{{ url('js/modules.js') }}"></script>
    
    <!-- CSRF Token Setup for Ajax -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @yield('js-library')
    @yield('js-custom')

</body>
</html>
