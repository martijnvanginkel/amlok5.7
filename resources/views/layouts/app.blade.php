<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMS</title>

    <!-- Styles -->
    @include('partials._styles')

</head>
<body>
    
    <div id="app">
        <div class="columns is-gapless is-fluid">
            <div class="column is-one-quarter">
                <!-- Navigation Sidebar -->
                @include('partials._cmsnav')
            </div>
            <div class="column">
                <div class="content">
                    <!-- Content -->
                    @yield('content')                
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('partials._cmsfooter')
    </div>
    
    <!-- Scripts -->
    @include('partials._scripts')

</body>
</html>
