<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link href="{{ url('') }}/assets//css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- font Awesome -->
    <script src="https://kit.fontawesome.com/ba0903e616.js" crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <link href="{{ url('') }}/assets//css/ionicons.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Morris chart -->
    <link href="{{ url('') }}/assets//css/morris/morris.css" rel="stylesheet" type="text/css" />
    
    <!-- jvectormap -->
    <link href="{{ url('') }}/assets//css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    
    <!-- fullCalendar -->
    <link href="{{ url('') }}/assets//css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    
    <!-- Daterange picker -->
    <link href="{{ url('') }}/assets//css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ url('') }}/assets//css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/assets//css/AdminLTE.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
    
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    
    @yield('css-library')
    @yield('css-custom')
</head>
<body class="skin-black h-screen relative flex flex-col">

    @yield('header')

    @yield('content')

    @yield('footer')
    
    <script src="{{url('')}}/js/modules.js"></script>
    
    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    
    <!-- jQuery UI 1.10.3 -->
    <script src="{{ url('') }}/assets//js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    
    <!-- Bootstrap -->
    <script src="{{ url('') }}/assets//js/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- Morris.js charts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ url('') }}/assets//js/plugins/morris/morris.min.js" type="text/javascript"></script>
    
    <!-- Sparkline -->
    <script src="{{ url('') }}/assets//js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    
    <!-- jvectormap -->
    <script src="{{ url('') }}/assets//js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="{{ url('') }}/assets//js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    
    <!-- fullCalendar -->
    <script src="{{ url('') }}/assets//js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    
    <!-- jQuery Knob Chart -->
    <script src="{{ url('') }}/assets//js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>

    <!-- daterangepicker -->
    <script src="{{ url('') }}/assets//js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ url('') }}/assets//js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

    <!-- iCheck -->
    <script src="{{ url('') }}/assets//js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- AdminLTE App -->
    {{-- <script src="{{ url('') }}/assets//js/AdminLTE/app.js" type="text/javascript"></script> --}}

    <!-- DATA TABES SCRIPT -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=G2tYg4eu"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('js-library')
    
    @yield('js-custom')

</body>
</html>
