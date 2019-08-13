<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
    <h1 style="text-align: center;">Introduction: What is Laravel?</h1>
<p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling</p>
<h2>How install Laravel?</h2>
    <p> After installing all the requirements requested on the official website of Laravel, we can determine how to install Laravel in a directory as follows: </p>
    <div class="dcode">
    <code>
        $ composer create-project --prefer-dist laravel/laravel project_name
    </code></div>
    <p>Inside of these directory we have a few folder and files from laravel. </p>
    <p>Another way to create a project with laravel is making laravel a global command </p>
    <div class="dcode">
    <code>
        $ composer global require laravel/installer
    </code></div>
    <p>After this we have to add the following line of code in the bottom of the hidden file .bashrc and restart the terminal.</p>
    <div class="dcode">
        <code>
            $ export PATH=/usr/local/bin:$HOME/.config/composer/vendor/bin:$PATH
        </code></div>
    <p>We reset the terminal and use the new command to create a new laravel proyect.</p>
    <div class="dcode">
        <code>
            $ laravel new name_project
        </code></div>
    <h3>Run the server</h3>
    <p>If we are working in our local computer without a server, we need work as a server in order to use the localhost.</p>
    <p>Laravel use as default the port 8000, to make run the project we run the following the next line (inside of the directory project):</p>
    <div class="dcode">
        <code>
            $ php artisan serve
        </code></div>
    <p>With this we can create laravel projects with the following line:</p>
    <div class="dcode">
        <code>
            $laravel new name_proyect
        </code></div>
    <h3>Laravel help us to know if we have bugs inside our directory files</h3>
    <p>Laravel has a directory named test inside of this have files to make some test to know if the code are correct.</p>
    <p>We can make a test using the following line of code inside on the current directory.</p>
    <div class="dcode">
    <code>
        $ vendor/bin/phpunit
    </code></div><br>
    <p>If we saw that we have a message with the word "OK", this tell us that the tests performed were performed correctly.</p>
    <h3>Laravel Resources Controllers</h3>
    <p>This framework provides us a better organization, with the help of the controllers we can make a segmentation of our code, in order to don't have troubles to understand our code and also to be more clean our code.</p>
    <p>We have a directory <strong>project_nameapp>Http>Controllers>name_controller.php</strong> where we have all the controllers, with the following line we can create automatically a new controller.</p>
    <div class="dcode">
        <code>
            $ php artisan make:controller name_controller
        </code></div>
    <p>You have to make a route for the controller, inside of the file web.php you can add the next line:</p>
    <div class="dcode">
        <code>
            Route::resource('name_resource', 'name_controller');
        </code></div>
        <br>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/ray_din/unam/webDesigner/toro/myFirstLaravel/resources/views/introduction.blade.php ENDPATH**/ ?>