<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>James Courtois</title>
    <link rel="stylesheet" href="./css/app.css">
    <!-- Styles -->
    <style>
        .jim>.ear:nth-child(1) {
            outline: 10px solid red !important;
        }
    </style>
</head>

<body>

    @include('header')

    <div class="container">

        <h2>Hello, I'm James Courtois.</h2>

        <p>Where I live, it's
            @php date_default_timezone_set('America/Chicago') @endphp
            {{date('l F jS Y h:i:s a') }}
        </p>

        @include('jim')

    </div>

    @include('footer')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>
