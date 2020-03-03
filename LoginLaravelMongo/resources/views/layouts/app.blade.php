 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

 
    <div id="app">
      
            @yield('content')
    </div>
