<!doctype html>
<html lang="es">
<head>

    <title>@yield('title','tienda online')</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/superhero/bootstrap.min.css" rel="stylesheet" integrity="sha256-o0IkLyCCWGBI+ryg6bL44/f8s4cb7+5bncR4LvU57a8= sha512-jptu6vg45XTY9uPX3vD5nHN4vASCN2hHl+fhmgkdd/px/bFHKMXmDXhkNmTiCpKqH6sliEPFakl2KZNav2Zo1Q==" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
</head>
<body>

@include('store.partials.nav')
@yield('content')

@include('store.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/pinterest_grid.js') }}"></script>


</body>
</html>