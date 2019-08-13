<?php
    //We define a var with the current direction
    $dir0="https://";
    $dir1=$_SERVER['HTTP_HOST'];
    $dir="$dir0$dir1";
?>
<div id="navbar">
    <div style="flex:0 0 50px"><img src="https://pngimage.net/wp-content/uploads/2018/06/laravel-icon-png-7.png" id="header-img" alt="Logo"></div>
    <div><p class="flog">Laravel</p></div>
    <div style="flex:0 0 240px">
        <nav id="nav-bar">
            <div><a href="<?php echo e($dir); ?>/" class="nav-link" id="introduction">Introduction</a></div>
            <div><a href="<?php echo e($dir); ?>/routes" class="nav-link" id="routes">Routes</a></div>
            <div><a href="<?php echo e($dir); ?>/blade" class="nav-link select" id="blade">Blade</a></div>
            <div><a href="<?php echo e($dir); ?>/vue" class="nav-link select" id="vue">Vue</a></div>
        </nav>
    </div>
</div>
<?php /**PATH /home/ray_din/unam/webDesigner/toro/myFirstLaravel/resources/views/navbar.blade.php ENDPATH**/ ?>