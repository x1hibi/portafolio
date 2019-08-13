<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body>
@include('navbar')
<main>
    <h1 style="text-align: center;">Laravel: Blade</h1>
    <p>Laravel has included a system of templates called Blade, this has the function of create a view in laravel in a easy way.</p>
    <p>And a other important thing to say about blade is the directives includes inside him.</p>
    <h2>Blade: Directives</h2>
    <p>The directives let us insert php code (control structures) more easy and also blade incorporates some that exist in php.</p>
    <h2>Example: Loop for</h2>
    <p>I will show you how you can insert a loop for with directives:</p>
    <div class="dcode">
        <code>
            &#64for (&#36i = 0; &#36i &lt 9; i++)<br>
            The number of iteration is: &#123{&#36i}&#125 <br>
            &#64endfor<br>
        </code></div>
    <p>The output is:</p>
    <div class="dcode">
        <code>
            @for ($i = 0; $i < 9; $i++)
            The number of iteration is: {{ $i }}<br>
            @endfor<br>
        </code></div>
    <h2>Example: empty</h2>
    <p>I will show you how use empty directive:</p>
    <div class="dcode">
        <code>
            &#64empty (&#36a)<br>
            This are show is the var a is empty.<br>
            &#64endempty<br>
        </code></div>
    <p>The output is:</p>
    <div class="dcode">
        <code>
            @empty($a)
                This are show is the var a is empty.
            @endempty
        </code></div>
    <p>Now we set a value with the directive to use php code</p>
    <div class="dcode">
        <code>
            &#64php<br>
                $a=1;<br>
            &#64endphp<br>
        </code></div    >
    <p>If we run again the code of empty, we get the following output:</p>
    <div class="dcode">
        <code>
            @php
                $a=1;
            @endphp
            @empty($a)
                This are show is the var a is empty.
            @endempty
        </code></div>
    <p>This give us a not return because we do not have the condition.</p>
    <p>As you can see the blade directives make more easy and clean the code in php.</p>


</main>
@include('footer')
</body>
</html>
