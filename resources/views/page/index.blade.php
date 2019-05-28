
@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4 gg hh">Welcome To Laravel</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
      </p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
      </p>
    </div>
  
    {{-- <script type="text/javascript">
      function loadCSS(csstext){ 
        var file = document.createElement("style");
        document.head.appendChild(file);
        document.getElementsByTagName('style')[1].innerHTML= csstext;
      }
      var class1 = ".gg{color: blue; }";
      var class2 = ".hh{font-size: 90px; }";
      loadCSS(class1+class2);
    </script> --}}
  </div>
  

@endsection
