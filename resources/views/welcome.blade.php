<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HealthOnline</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                @auth('patient')
                    <a href="{{ route('patient.dashboard') }}">Patient Dashboard</a>
                @else
                    <a href="{{ route('patient.login') }}">Patient Login</a>
                @endauth
                @auth('doctor')
                    <a href="{{ route('doctor.dashboard') }}">Doctor Dashboard</a>
                @else
                    <a href="{{ route('doctor.login') }}">Doctor Login</a>
                @endauth
                @auth('admin')
                    <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                @else
                    <a href="{{ route('admin.login') }}">Admin Login</a>
                @endauth
            </div>

            <div class="content">
                <div class="title m-b-md">
                    HealthOnline
                </div>
            </div>
        </div>
    </body>
</html>
