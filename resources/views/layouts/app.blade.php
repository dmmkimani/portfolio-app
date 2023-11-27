<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>dmmkimani.com</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Mono">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            html, body {
                height: 100%;
            }

            #header {
                margin: auto;
                position: sticky;
                top: 0px;
                min-height: 82.5px;
                max-height: 82.5px;
                min-width: 1500px;
                background-color: DarkBlue;
                text-align: center;
                padding: 15px;
                border-bottom: 3px solid DarkViolet;
                font-family: 'Roboto Mono', sans-serif;
                font-size: 22px;
                transition: top 0.2s ease-in-out;
            }

            #content {
                min-height: 100%;
                min-width: 1500px;
                padding-top: 45px;
                background-color: MidnightBlue;
                text-align: center;
                font-family: 'Roboto Mono', sans-serif;
            }

            li.dmmk {
                float: left;
                margin-left: 250px;
                padding-bottom: 1.5px;
            }

            li.socials {
                float: right;
            }

            ul.nav>li {
                width: 250px;
                display: inline-block;
            }

            ul.nav>li:hover {
                border-bottom: 3px solid Gold;
            }

            ul.nav>li>a>div {
                width: 100%;
                margin-top: 15px;
                margin-bottom: 15px;
            }

            div.empty {
                margin-top: 50px;
            }

            div.logo {
                margin: auto;
            }

            div.skills {
                display: inline-block; 
                width: 650px;
                text-align: left;
                vertical-align: middle;
            }

            div.rounded {
                display: inline-block;
                margin-top: 5px;
                margin-bottom: 5px;
                border-radius: 15px;
                border: 2px solid Gold;
                padding: 20px;
                height: fit-content;
                text-align: center;
                color: Gold;
                transition: all 0.25s;
            }

            div.rounded:hover {
                background-color: Gold;
                color: DarkViolet;
            }

            div.rounded.cv {
                margin: auto;
                display: block;
                width: fit-content;
                height: fit-content;
                margin-top: 75px;
                padding: 20px;
                padding-left: 35px;
                padding-right: 35px;
                border: 2px solid DarkViolet;
                text-align: center;
            }

            div.rounded.cv:hover {
                background-color: DarkBlue;
            }

            div.skill {
                width: fit-content;
            }

            div.project {
                width: 650px;
            }

            div.comment {
                width: 400px; 
                display: inline-block; 
                vertical-align: middle;
                text-align: right;
            }

            div.projectDesc {
                margin: auto;
                width: 1250px;
                height: 100%;
                padding: 35px;
                padding-bottom: 10px;
                background-color: DarkBlue;
                text-align: center;
                margin-top: 50px;
                border-top: 3px solid DarkViolet;
                border-bottom: 3px solid DarkViolet;
                border-left: 3px solid DarkViolet;
                border-right: 3px solid DarkViolet;
                transition: all 0.25s;
            }

            div.projectDesc:hover {
                background-color: MidnightBlue;
            }

            div.logo {
                display: grid;
                grid-template: 1fr / 1fr;
                place-items: center;
                text-align: center;
                max-width: 100px;
                margin-top: 30px;
            }

            div.slideshow {
                display: grid;
                grid-template: 1fr / 1fr;
                place-items: top;
                text-align: center;
                max-width: 100px;
                margin-top: 30px;
            }

            div.slideshow > * {
                grid-column: 1 / 1;
                grid-row: 1 / 1;
            }

            div.slide {
                min-width: 1178px;
                padding-left: 35px;
                padding-right: 35px;
            }

            div.slideCtrl {
                width:100%; 
                text-align: center;
                margin-bottom: 25px;
            }

            div.slideText {
                width: 100%;
            }

            button.slideBtn {
                display: inline-block;
                padding: 5px;
            }

            img {
                margin: auto;
                display: block;
            }

            img.arrow {
                min-height: 50px;
                max-height: 50px;
                transform: rotate(270deg);
                margin-top: 55px;
            }

            img.tech {
                min-height: 30px;
                max-height: 30px;
                margin-bottom: 30px;
                margin-left: 50px;
                margin-right: 50px;
            }

            img.ys {
                display: inline-block;
                min-height: 550px;
                max-height: 550px;
                margin-bottom: 30px;
                margin-left: 15px;
                margin-right: 15px;
            }

            img.persona , img.storyboard {
                min-width: 100%;
                max-width: 100%;
                min-height: 100%;
                max-height: 100%;
                margin-bottom: 30px;
                margin-left: 15px;
                margin-right: 15px;
                padding-right: 35px;
            }

            img.sds {
                display: inline-block;
                min-height: 350px;
                max-height: 350px;
                margin-bottom: 30px;
                margin-left: 15px;
                margin-right: 15px;
            }

            iframe.video {
                margin: auto;
                display: block;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .git {
                padding: 15px;
            }

            .arrow {
                padding-left: 2px;
                font-size: 54px;
                color: DarkViolet;
            }

            .gold {
                color: Gold;
            }

            .violet {
                color: DarkViolet;
            }

            h1 {
                display: inline;
            }

            h2 {
                display: inline;
                writing-mode: vertical-rl;
                text-orientation: upright;
                font-size: 38px;
            }

            h3 {
                font-size: 24px;
                color: Gold;
            }

            h4 {
                top: 0;
                font-size: 20px;
            }

            h5 {
                font-size: 18px;
            }

            p {
                font-size: 24px;
            }

            p.title {
                color: Gold;
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 30px;
            }

            p.body {
                font-size: 20px;
                margin-bottom: 30px;
                color: Gold;
            }

            p.gold {
                display: inline;
                color: Gold;
            }

            p.violet {
                display: inline;
                color: DarkViolet;
            }

            i {
                color: Gold;
            }
        </style>
    </head>
    
    <body class="font-sans antialiased">
        <div id="header">
            <ul class="nav">
                <li class="dmmk">
                    <a href="{{route('home')}}">
                        <div>
                            <h1 class="gold">dmmkimani</h1><h1 class="violet">.com</h1>
                        </div>
                    </a>
                </li>
                <li class="socials" style="margin-right: 250px;">
                    <a href="https://www.linkedin.com/in/dmmkimani/" target="_blank">
                        <div>
                            <i class="fa fa-linkedin-square" style="font-size:32px;"></i>
                        </div>
                    </a>
                </li>
                <li class="socials">
                    <a href="https://www.github.com/dmmkimani/" target="_blank">
                        <div>
                            <i class="fa fa-github" style="font-size:32px;"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="content">
            <div style="margin: auto; width: 1500px;">
                @yield('content')
            </div>
        </div>

        <script>
            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (currentScrollPos > 150) {
                    document.getElementById("header").style.top = "-82.5px";
                } else {
                    document.getElementById("header").style.top = "0px";
                }
            }
        </script>
    </body>
</html>