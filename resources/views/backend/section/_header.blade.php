<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ecommerce') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset ('backend/css/bootstrap.min.css')" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset ('backend/css/font-awesome.min.')css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset ('backend/css/nprogress.css" ')l="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset ('backend/css/animate.min.css" ') rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset ('backend/css/custom.min.css") rel="stylesheet">
</head>