<!doctype html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en" />
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#4188c9">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

        <title>{{ config('app.name') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ config('app.url') }}">

    @section('styles')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    @show
    </head>
    <body class="">
        <div class="page">
            <div class="page-content">
                <div class="container text-center">
                    <div class="display-1 text-muted mb-5"><i class="si si-exclamation"></i> 404</div>
                    <h1 class="h2 mb-3">Oops.. You just found an error page..</h1>
                    <p class="h4 text-muted font-weight-normal mb-7">We are sorry but you are not authorized to access this page&hellip;</p>
                    <a class="btn btn-primary" href="javascript:history.back()">
                    <i class="fe fe-arrow-left mr-2"></i>Go back
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>