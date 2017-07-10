<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $page_name }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('custom_styles')
</head>

<body>
    <div class="container-fluid">
        @yield('content')
    </div>

</body>

<ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="www.tylerogara.com">Home</a></li>
    <li role="presentation"><a href="www.tylerogara.com/aboutme">About Me</a></li>
    <li role="presentation"><a href="https://www.linkedin.com/in/tylerogara/">LinkedIn</a></li>
    <li role="presentation"><a href="https://onedrive.live.com/?cid=4273683C7EE3288A&id=4273683C7EE3288A%212899&parId=4273683C7EE3288A%21109&o=OneUp">Resume</a></li>
</ul>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


@yield('custom_scripts')

</html>
