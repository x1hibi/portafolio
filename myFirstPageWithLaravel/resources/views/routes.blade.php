<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body>
@include('navbar')
<main>
    <h1 style="text-align: center;">Laravel: Routes</h1>
    <p>Laravel is based on a system of views (this is responsible for preventing that we have several .php files), resulting in only the index.php can show all the sections of the project that we work, these are related to the index through routes, we define this in the file inside of <strong><em>project_name->routes->web.php</em></strong></p>
    <p>We can call a new view with the next code:</p>
    <div class="dcode">
        <code>
            Route::get('/name_url',function (){
            return view('name_view');
            });
        </code></div>
    <p>With this simple code we can bring from the directory view a new view(a new page of the web site) to easy,</p>
    <p>where <strong>name_url</strong> is the name that will be used in the url to call a new view.</p>
    <p>And <strong>name_view</strong> is part of the name of the file with extension .balde.php inside of the directory view, where we can add <html class=""></html></p>

    <h2>Example of view </h2>
    <p>We can call view or code of html or php, for example we create the next example:</p>
    <div class="dcode">
    <code>
        Route::get('/route_example',function (){<br>
        return view('example');<br>
        });
    </code></div>
    <p>To see this view change in the url routes to <em><a href="https://learning-laravel--torodigital.000webhostapp.com/example">example</a></p>
    <p>The code inside of example.blade.view is:</p>
    <div class="dcode">
        <code>
            &lthtml&gt<br>
            &ltbody&gt<br>
            &ltdiv style="text-align: center"&gt<br>
            &lth1 style="color: #4aa0e6;font-size: 300%"&ltWELCOME THIS IS YOUR FIRST VIEW WITH LARAVEL!!!</h1&gt<br>
            &lt?php<br>
                echo "You can insert you php code!!!";<br>
                ?&gt<br>
            &lta href="https://learning-laravel--torodigital.000webhostapp.com/routes">CLICK HERE TO CAMEBACK TO THE PAGE&lt/a&gt<br>
            &ltdiv&gt<br>
            &lt/body&gt<br>
            &lt/html&gt<br>
        </code></div>
    <br>
</main>
@include('footer')
</body>
</html>
