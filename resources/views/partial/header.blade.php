
      <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}"><img style ="height: 170%;" src="{{url('img/logo.png')}}" alt="Biman Bangladesh Airlines"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/') }}"><i class="fa fa-list" aria-hidden="true"></i>
 List of Notice</a></li>
            @else
                <li><a href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></li>
                <li><a href="{{url('notice/add')}}"><i class="fa fa-plus" aria-hidden="true"></i>
 Add Notice</a></li>
                <li><a href="{{url('notice/all')}}"><i class="fa fa-list" aria-hidden="true"></i>
 List of Notice</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>

                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
