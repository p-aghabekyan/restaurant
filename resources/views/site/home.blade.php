<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restaurants') }}</title>
    <link rel="stylesheet" href="{{ asset('site/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <style>
        .fade-enter-active, .fade-leave-active {
            transition: opacity 1s;
        }
        .fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
            opacity: 0;
        }

        .fade-enter, .fade-leave-to
            /* .slide-fade-leave-active до версии 2.1.8 */ {
            transform: translateX(1000px);
            transition: all 1s;
            opacity: 0;
        }

    </style>
</head>
<body>

    <div id="app" style="overflow: hidden">
        <header-component></header-component>
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
        {{--<about-component></about-component>--}}
        {{--<service-component></service-component>--}}
        {{--<menu-component></menu-component>--}}
        {{--<reservation-component></reservation-component>--}}
        {{--<gallery-component></gallery-component>--}}
        {{--<blog-component></blog-component>--}}
        <footer-component></footer-component>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ asset('site/js/script.js') }}"></script>--}}
</body>
</html>

