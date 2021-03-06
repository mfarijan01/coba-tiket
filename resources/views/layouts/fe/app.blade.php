<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.fe.parts.part-meta')
    <!-- CSS -->
    @include('layouts.fe.parts.part-css')
    <style>
        *{
            font-family: 'Poppins' !important;
        }

        body{
            background-color: #f8f8f8 !important;
        }

        #ilustration{
            width: 40%;
        }

        @media only screen and (max-width: 767px) {
            #ilustration{
                width: 75%;
            }
        }

        button {
            cursor: pointer;
            outline: none;
            width: 100%;
            display: block;
        }

        .purple-white {
            font-weight: 700;
            color: #664e96;
            border-color: #664e96;
            background: transparent;
        }
        .purple-white:hover {
            color: white;
            background: #664e96;
            border-color: #664e96;
        }

        .outline {
            position: relative;
            z-index: 3;
            background: transparent;
            color: #1172c4;
            font-size: 14px;
            border-color: #1172c4;
            border-style: solid;
            border-width: 2px;
            border-radius: 22px;
            padding: 10px 40px;
            text-transform: uppercase;
            transition: all 0.2s linear;
        }

        a {
            text-decoration: none !important;
            color: #537CF0 !important;
        }

        p {
            color: #537CF0 !important;
        }

        .outline:hover {
            color: white;
            background: #1172c4;
            border-color: white;
            transition: all 0.2s linear;
        }

        .outline:active {
            border-radius: 22px;
        }

        div .card{
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            border-radius: 15px 50px;
        }

        .title{
            color: #537CF0 !important;
            font-weight: 500;
            padding-bottom: 3%;
            border-bottom: 3px solid #537CF0;
        }


        .control-group {
            padding-top: 28px;
            position: relative;
        }
        
        .control-group input {
            -webkit-appearance: none;
            appearance: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            border: 6px solid #ccc;
            background: #fff;
            border-radius: 0;
            color: #222;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            font-weight: 400;
            outline: none;
            padding: 28px 15px 2px 15px;
            transition-property: border, padding;
            transition-duration: 500ms;
            transition-timing-function: ease;
            width: 100%;
        }
        
        .control-group input:focus {
            border-color: #2d9ae3;
            padding-bottom: 16px;
            padding-top: 16px;
        }
        
        .control-group input + label {
            background: #ccc;
            color: #fff;
            font-weight: 500;
            left: 0;
            padding: 5px 20px 5px 20px;
            position: absolute;
            top: 33px;
            transition-property: top, background;
            transition-duration: 500ms;
            transition-timing-function: ease;
        }
        
        .control-group input:focus + label {
            background: #2d9ae3;
            top: 0;
        }
    </style>
</head>
<body>
    @yield('content')
    @include('layouts.fe.parts.part-js')
    @stack('scripts')
</body>
</html>