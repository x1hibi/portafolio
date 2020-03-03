<!DOCTYPE html>
<html lang="es">
    @include('includes.head')
    <body>
    @include('includes.header')
        <main>
            @yield('content')
        </main>
    @include('includes.footer')
    @include('includes.scripts')
    </body>
</html>