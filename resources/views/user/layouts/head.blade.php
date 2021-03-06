<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta name="author" content="">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="{{ asset('user/css/clean-blog.min.css') }}" rel="stylesheet">

<!-- Scripts -->
<script src="{{ asset('js/app.js?' . time()) }}" defer></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('user/js/clean-blog.min.js?' . time()) }}" defer></script>

@section('head')
    @show