<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : 'null'}}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


  @yield('head')
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>@yield('title')</title>
</head>
<style>
.card-header{
  background-color: brown;
  color : white;
}
.card-header-title{
  color : white;
}
.navbar{
  background-color: brown;
  border-radius: 0;
}
.center{
  margin: 58px auto;
  width:80%;
}
.footer {
  background-color: #555;
  color: white;
  padding: 7px;
  text-align: center;
  /* width:82.5%;
  margin-left:8.75%; */
}
.card{
  margin-bottom: 100px;
  width: 70%;
}
.col-last{
  width:343px;
}
.alert{

  background: none;
  border: none;
  font-size: 10px;
}
.ajust{
  margin-top:60px;
  margin-bottom:20px;
}

</style>
<body>

  <div id="app">
    <div class="navbar-fixed-top">
      <nav class="navbar has-shadow">

        <div class="navbar-brand">
          <a href="{{ url('/home') }}" class="navbar-item fa fa-home"></a>

          <div class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div class="navbar-menu" id="navMenu">
          <div class="navbar-start"></div>

          <div class="navbar-end">
            @if (Auth::guest())
            <a class="navbar-item " href="{{ route('login') }}">Login</a>
            <a class="navbar-item " href="{{ route('register') }}">Register</a>
            @else
            <div class="navbar-item has-dropdown is-hoverable">

              <div class="search">
                <form class="navbar-form navbar-right" role="search">
                  <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
              <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

              <div class="navbar-dropdown">
                <a class="navbar-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
        @endif
      </div>
    </div>

  </nav>
</div>
<div class="ajust">
  @yield('content')
</div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<div class="footer navbar-fixed-bottom">

  <p>@2018</p>

</div>

</html>
