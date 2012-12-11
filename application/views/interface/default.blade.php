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
            <ul class="nav">
              @section('navigation')
                @if(Auth::check())
                  <li><a href="/{{ Auth::user()->username }}">~{{ Auth::user()->username }}</a></li>
                @else

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

    <div class="container">
      @yield('content')
      <hr>
      <footer>
        &copy; Muggr <?php echo date('Y');?>
      </footer>
    </div>
    {{ Asset::scripts() }}
    @yield('js_scripts')
  </body>
</html>