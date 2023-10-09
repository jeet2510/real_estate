<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
                /* Add this to your CSS file */

            /* Style for the posts table */
            .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            }

            .table th, .table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            }

            /* Style for the image thumbnails */
            .table img {
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: 0 auto;
            }

            /* Style for the action buttons */
            .btn-group {
            display: flex;
            justify-content: center;
            }

            .btn {
            margin: 5px;
            }

            /* Style for the create button */
            .create-button {
            margin-bottom: 20px;
            }

        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="container">
        @yield('content')
    </div>
        </div>
    </body>
</html>
