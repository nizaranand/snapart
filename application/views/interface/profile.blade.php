<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    {{ Asset::styles() }}
    <link href="{{ URL::base() }}/css/main/essentials.css" media="all" type="text/css" rel="stylesheet">
    @yield('internal_css')
  </head>
  <body>
    <div class="navbar navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/"><strong>snap<span class="make_it_red">Art</span></strong></a>
          <div class="nav-collapse">
            <form id="header_search_form" class="navbar-form pull-left">
              <input type="text" name="search_query" id="search_query" class="span2"/><button type="submit" class="btn white_button">Search</button>
            </form>
            <ul class="nav">
              @section('navigation')
                @if(Auth::check())
                <li class="dropdown">
                  <a class="dropdown-toggle" href="/{{ Auth::user()->username }}" data-toggle="dropdown">~{{ Auth::user()->username }} <strong class="caret"></strong></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="/{{ Auth::user()->username }}">Profile</a></li>
                    <li><a href="/settings">Settings</a></li>
                    <li><a href="/logout">Logout</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" href="/inbox" data-toggle="dropdown"><i class="icon-inbox"></i> 0 <strong class="caret"></strong></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="#">0 messages</a></li>
                    <li class="divider"></li>
                    <li><a href="/notes">Notes</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown">Submit <strong class="caret"></strong></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="/submit_art"><strong>Submit art</strong></a></li>
                    <li><a href="/create_journal">Write a journal entry</a></li>
                  </ul>
                </li>
                @else
                 <li class="dropdown">
                  <a class="dropdown-toggle" href="/login" data-toggle="dropdown">Login <strong class="caret"></strong></a>
                  <ul id="login_form_holder" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li>
                    {{ Form::open('users/validate_login', 'POST', array('id'=>'login_form_header')) }}
                      <label for="username_login">Username</label>
                      <input type="text" name="username_login" id="username_login" class="input_login_header"/>
                      <label for="password_login">Password</label>
                      <input type="password" name="password_login" id="password_login" class="input_login_header"/>
                      <button type="submit" class="btn white_button">Login</button>
                    {{ Form::close() }}
                    </li>
                    <li class="divider"></li>
                    <li><a href="/join">Join snapArt for FREE!</a></li>
                  </ul>
                </li>
                @endif
              @yield_section
            </ul>
            @if(!Auth::check())
            <ul class="nav pull-right">
              <li><a href="/join">Join snap<span class="make_it_red">Art</span> for FREE!</a></li>
            </ul>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div id="main_body_container" class="container">
      @yield('content')
      <hr>
      <footer>
        &copy; <?php echo date('Y');?> snap<span class="make_it_red">Art</span> for FREE!</a>. All rights reserved
      </footer>
    </div>
    {{ Asset::scripts() }}
    <script src="{{ URL::base() }}/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('.dropdown-toggle').dropdown();
      $('.dropdown input, .dropdown label').click(function(e) {
        e.stopPropagation();
      });
    </script>
    @yield('js_scripts')
  </body>
</html>