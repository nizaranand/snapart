@layout('interface.default')
@section('title') snapArt: where application meets ART! @endsection
@section('internal_css')
<style>
	#main_page_sidemenu li a{
    color:#6c6c6a;
  }
  #main_page_sidemenu li.active a{    
    background-color: #992522;
    color: #ffffff;
    font-weight: bold;
  }
  #main_page_sidemenu li.active:hover a{
    background-color: #992522;
  }
  #main_page_sidemenu li:hover a{
    background-color: #393939;
    color: #ffffff;
  }
</style>
@endsection

@section('content')
<div class="row">
  <ul id="main_page_sidemenu" class="nav nav-pills nav-stacked span3">
    <li><a href="#">Popular 8 hours</a></li>
    <li class="active"><a href="#">Newest</a></li>
    <li><a href="#">Popular 24 hours</a></li>
    <li><a href="/category">Popular this week</a></li>
    <li class="nav-header">Category</li>
    <li><a href="/category">Category 1</a></li>
    <li><a href="/category">Category 2</a></li>
    <li><a href="/category">Category 3</a></li>
    <li><a href="/category">Category 4</a></li>
  </ul>
  <div class="span9">
    {{ Form::open('art/search_art', 'POST', array('class'=>'form-inline')) }}
      <input type="text" name="search_query" id="search_query" class="input-xlarge"/><button type="submit" class="btn white_button">Search Art</button>
    {{ Form::close() }}
  </div>
</div>
@endsection