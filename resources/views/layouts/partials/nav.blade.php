
<nav class="navbar navbar-default header-top">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://localhost/forum/public/" class="g" title="Wisconsin I.T Forum"> {Wizzy|Hub}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right">
      @if( ! $currentUser )

            
            <li><a>Welcome, <b>Guest:</b></a></li>
            <li><a href="http://localhost/forum/public/">Home</a></li>
            <li><a href="{{ route('get_login')}}"> <b>LOGIN!</b></a></li>
            <li><a href="{{ route('get_register')}}">Register</a></li>

            @else

            
            <li><a> Welcome, {{ $currentUser->name }}</a></li>
            <li><a href="http://localhost/forum/public/">Home</a></li>
            <li><a href="{{ route('get_post')}}">Create New Topic</a></li>
            <li><a href="{{ route('get_logout')}}">Log Out</a></li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
          <img src="/forum/public/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
            Profile <span class="caret"></span>
             </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
            <li><a href="#">Account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('get_logout')}}">Log Out</a></li>
          </ul>
        </li>
      </ul>

            @endif
</nav>