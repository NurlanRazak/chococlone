 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<div class="panel-group">
    <nav class="navbar navbar-defualt">
        <div class="container">
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Chocomarket</a></li>


                    <li><a href="#">Chocolife</a></li>
                    <li><a href="#">Chocomart</a></li>
                    <li><a href="#">Chocotravel</a></li>
                    <li><a href="#">Lensmark</a></li>
                    <li><a href="#">Chocofood</a></li>
                    <li><a href="#">Doctor.kz</a></li>
                </ul>
                <div class="container">
                    <div class="pull-right" style="margin-top: 10px;">
                        @if (Auth::guest())
                      <a href="{{url('register')}}">   <button class="btn btn-primary">Регистрация</button> </a>
                       <a href="{{url('login')}}"> <button class="btn btn-default btn-md">Вход</button></a>
                          @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                     @if(\Auth::user()->isAdmin == 1)
                                    <li>     
                                    <a href="{{ route('admin') }}">В админку</a>
                                   
                                    </li>
                                                 @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="col-md-4">

        <div class="dropdown">

            <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="margin-left: 150px;">Алматы <span class="caret"></span></button>
            <ul class="dropdown-menu">

                <li><a href="#">Shymkent</a></li>
                <li><a href="#">Astana</a></li>
            </ul>
        </div>
    </div>
    <div>
        <ul class="nav navbar-nav">
            <li><a href="#"><i class="glyphicon glyphicon-flag" style="color:black; font-size:16px">Нужна помощь?</i></a></li>
            <li><a herf="#"><i class="glyphicon glyphicon-lock" style="color:black; font-size:16px">Защита покупателей</i></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-envelope" style="color:black; font-size:16px">Обратная связь</i></a></li>
        </ul>
    </div>
    <br>

    <div class="container" style="padding-top: 40px; margin-bottom: 20px;">
        <div class="row" style=" margin-bottom: 20px; ">
            <div class="col-3 col-md-2" style="    width: 21.666667%;">
              <a href="{{url('/main')}}"> <img src="https://images.kz.prom.st/514723_w100_h100_logo_foto.png" class="img-responsive" style="width:200px;      height:40px"> </a>
            </div>
            <div class="col-3 col-md-2" style="margin-left: -19px; ">
                <p >Главное, чтобы Вы <br>были счастливы!</p>
            </div>

            <div class="col-3">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Найти среди 642 акций" style="width:500px;">
                    </div>
                    <button type="submit" class="btn btn-default">Поиск</button>
                </form>
            </div>
        </div>








