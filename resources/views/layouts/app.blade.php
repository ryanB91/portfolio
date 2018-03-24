<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ryan Belandres personal website">
    <meta name="kewords" content="ryan belandres, ryan belandres photography, ryan belandres personal website">
    <meta name="author" content="Ryan Belandres">
    <title>Ryan Belandres</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/app.js') }}" rel="script">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $('.carousel').carousel({
            interval: 1000
        })
    </script>


</head>
<body class="text-center">

    @yield('content')

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS.load('particles-js',
            '{{ URL::asset('js/particles.json') }}', function(){
                console.log('particles.json loaded...');
            })
    </script>

    <footer>
        <a href="https://www.instagram.com/ryanbelandres/"><div id="instagram"></div></a>
        <a href="https://www.facebook.com/RyanBelandresPhotography/"><div id="fb"></div></a>
        <p>Copyright © 2018 Ryan Belandres | All rights reserved</p>
    </footer>

</body>
</html>