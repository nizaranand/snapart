<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    {{ Asset::styles() }}
    <link rel="stylesheet" type="text/css" href="css/main/interface.css">
    @yield('internal_css')
  </head>
  <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/"><strong>snap<span class="make_it_red">Art</span></strong></a>
          <div id="nav_header" class="nav-collapse">
            <ul class="nav">
              @section('navigation')
                <form class="navbar-form pull-left">
                  <input type="text" class="span2">
                  <button type="submit" class="btn whitebutton">Search</button>
                </form>
                <li class="empty_divider">&nbsp;</li>
                @if(Auth::check())
                <li class="dropdown">
                  <a href="/{{ Auth::user()->username }}" class="dropdown-toggle" data-toggle="dropdown">~{{ Auth::user()->username }} <b class="caret"></b></a>
                  <ul id="dropdown_user" class="dropdown-menu">
                    <li><a href="/{{ Auth::user()->username }}"><strong>Profile</strong></a></li>
                    <li><a href="/settings">Settings</a></li>
                    <li><a href="/logout">Logout</a></li>
                  </ul>
                </li>
                <li><a href="/inbox"><i class="icon-inbox"></i> 17</a></li>
                <li><a href="/submit">Submit</a></li>
                @endif
              @yield_section
            </ul>
            <ul class="nav pull-right">
              @if(!Auth::check())
              <li><a href="/join">Join snap<span class="make_it_red">Art</span> for FREE</a></li>
              @else
              <li><a href="/friends">Friends</a></li>
              <li><a href="/favorites">Favorites</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="main_container" class="container">
      @yield('content')
    </div>
    <footer>
      &copy; <?php echo date('Y');?> snap<span class="make_it_red">Art</span>. All rights reserved
    </footer>
    {{ Asset::scripts() }}
    <script src="{{ URL::base() }}/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('.dropdown-toggle').dropdown();
    </script>
    @yield('js_scripts')
  </body>
</html>