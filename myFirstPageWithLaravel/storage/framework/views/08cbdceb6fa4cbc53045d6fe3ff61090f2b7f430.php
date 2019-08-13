<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
    <h1 style="text-align: center;">Vue js with laravel</h1>
    <h2>What is Vue js</h2>
    <p>It is a progressive javaScript framework, is reactive, based on components and is used in Single-Page Applications, it is included in Laravel by default.</p>
    <div id="app">
        <new-component></new-component>
    </div>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/ray_din/unam/webDesigner/toro/myFirstLaravel/resources/views/vue.blade.php ENDPATH**/ ?>
