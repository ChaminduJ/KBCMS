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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>


  @yield('head')
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>@yield('title')</title>
</head>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
body{
  background-color: #32A89D;
}

.card-header{
  background-color: brown;
  color : white;
}
.card-header-title{
  color : white;
}

.navbar{
  background-color: #0D3B1F;
  border-radius: 0;
}
.navbar-header a .navbar-brand{
  float: left;
}
.center{
  margin: 58px auto;
  width:80%;
}
.footer {
  background-color: #0D3B1F;
  color: white;
  padding: 7px;
  text-align: center;
  /* width:82.5%;
  margin-left:8.75%; */
}

.col-last{
  width:343px;
}
.alert{

  background: none;
  border: none;
  font-size: 10px;
  margin-bottom: 0px;
}
.ajust{
  margin-top:60px;
  margin-bottom:42px;
}
.icon-bar{
  background-color: blue;
}
.collapse{
  color:blue;
}
.navbar-right{
  float:right;
}

</style>
<body>

  <div id="app">

    <div class="navbar-fixed-top">

      <nav class="navbar">
        <div class="">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand fa fa-home" href="{{ url('/home') }}">Home</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>

            <div class="navbar-end navbar-right">
              @if (Auth::guest())
              <a class="navbar-item " href="{{ route('login') }}">Login</a>
              <a class="navbar-item " href="{{ route('register') }}">Register</a>
              @else
              <div class="navbar-item has-dropdown is-hoverable">

                <div class="search float">
                  <form class="navbar-form navbar-right" role="search">
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Search..">
                      <span class="input-group-btn">
                        <button class="btn btn-active" type="button">
                          <span class="glyphicon glyphicon-search"></span>
                        </button>
                      </span>
                    </div>
                    {{ csrf_field() }}
                  </form>
                </div>
                <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                <div class="navbar-dropdown">
                  <a class="nav navbar-nav" href="{{ route('logout') }}"
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
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
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
