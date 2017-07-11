<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tyler O'Gara's Site">
    <meta name="author" content="Tyler O'Gara">

    <title>{{ $page_name }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/grayscale.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('custom_styles')
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    @include('menu')

    @yield('content')

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>

<script type="text/javascript" src="{{asset('js/grayscale.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $('*[data-menu-item="{{ $menu_link }}"]').addClass('active');
</script>

@yield('custom_scripts')


</html>
