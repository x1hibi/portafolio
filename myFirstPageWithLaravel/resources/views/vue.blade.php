<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')
<body>
@include('navbar')
<main>
    <h1 style="text-align: center;">Vue js with laravel</h1>
    <h2>What is Vue js</h2>
    <p>It is a progressive javaScript framework, is reactive, based on components and is used in Single-Page Applications, it is included in Laravel by default.</p>
    <p>We show some aplications with vue.</p>
    <p>With vue we can do a lot of changes in our aplication, without re-loading the page(this is we can see the changes in real time).</p>
    <div id="app" style="border: 1px solid gray">
        <new-component></new-component>
    </div>
</main>
@include('footer')
</body>
</html>
