<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Meteo</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/nunito-sans" type="text/css"/>
  <link rel="icon" href="img/zodlogo.png">
  <style type="text/css">body{font-family: 'NunitoSansRegular'!important;}</style>
  <style type="text/css">
  .p-3{
    border: 1px solid grey;
  }

</style>
</head>
<body>
  <div class="se-pre-con"></div>
  <div id="app">
    <div class="content bg">
      <nav class="navbar navbar-expand-lg navbar-light bg-light bg-tr h1">
        <a class="navbar-brand text-white" href="/">DSP METEO UA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end h5" id="navbarNav">
          <ul class="navbar-nav navbar-right h3">

           <li class="nav-item mr-3">
            <a class="nav-link text-white" href="/main#forc">Прогноз</a>
          </li>

          <li class="nav-item mr-3">
            <a class="nav-link text-white" href="/#features">Можливості</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-white" href="/#review">Відгуки</a>
          </li>

          <!--
          @guest
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Вхід') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Реєстрація') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      -->
    </ul>
  </div>
</nav>
<div class="row m-0 pb-5" >
  <div class="col-md-6 m-auto">
    <label class="text-white mb-5 h1"><b>DSP METEO UA.</b> Головний місячний прогноз погоди.</label> <br>
    <a href="/main#forc" class="gradient-button w-button mr-3 text-white mb-5">Прогноз</a>
    <!--<a href="/main#forc" class="button w-button text-dark mb-5">Прогноз</a>-->
  </div>
  <div class="col-md-6 text-center m-auto pt-4">
    <img class="w-75" src="img/moon.png">
  </div>
</div>
</div>

<main class="py-4" style="background-image:url('img/Background.png');
background-repeat: no-repeat;
background-size: 100% 100%;
background-attachment: fixed;min-height: 450px;">
@yield('content')
</main>

<footer class="page-footer pt-3 pb-3">
  <div class="content text-center" >
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-4 col-md-4 mt-md-0 mb-3 text-md-left text-sm-center">
          <h3>DSP METEO UA</h3>   
        </div>
        <div class="col-sm-4 col-md-4 mb-md-0 mb-3 text-center">
          <label>Розробка - <b>Andrii Romanov</b></label> <br>
          <label>DSP METEO UA</label>
        </div>
        <div class="col-sm-4 col-md-4 mb-md-0 mb-3 text-md-right text-sm-center">
          <a href="#"><i class="fab fa-twitter-square h3 text-secondary"></i></a>
          <a href="#"><i class="fab fa-facebook-square h3 text-secondary"></i></a>
          <a href="#"><i class="fab fa-instagram h3 text-secondary"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
