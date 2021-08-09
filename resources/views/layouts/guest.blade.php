<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Vromon</title>

        <style>
            body {
                font-family: Montserrat;
            }
    
            .semiBoldText {
                font-family: Montserrat;
                font-weight: 600;
            }
    
            .boldText {
                font-family: Montserrat;
                font-weight: 700;
            }
    
            .mediumText {
                font-family: Montserrat;
                font-weight: 500;
            }
    
            a {
                text-decoration: none;
            }
    
            .textPrimary {
                color: #ea5d11;
            }
    
            .textSecondery {
                color: #ffffff;
            }
    
            .textLight {
                color: #ffffff;
            }
    
            .borderPrimary {
                border: 2px solid #ea5d11;
            }
    
            .bgPrimary {
                background-color: #ea5d11;
            }
    
            .bgLight {
                background-color: #ffffff;
            }
    
            .socialLinks {
                color: #b4b4b4;
                cursor: pointer;
                transition: 0.2s;
            }
    
            .socialLinks:hover {
                color: #525252;
            }
    
            .bannerImage {
                object-fit: cover;
                width: 100%;
                height: 65vh;
            }
    
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-light antialiased">
        {{ $slot }}
    </body>
</html>