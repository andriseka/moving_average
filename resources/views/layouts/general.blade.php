<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{asset('assets/css/tabler.min.css')}}">
    @yield('css')

  </head>
  <body >
    <div class="page">
        @include('sweetalert::alert')

        @include('layouts.header')
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>


    <script src="{{asset('assets/js/demo.min.js')}}"></script>
    <script src="{{asset('assets/js/tabler.min.js')}}"></script>

    @yield('js')

  </body>
</html>
