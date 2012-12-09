@layout('interfaces.default')
@section('title') snapArt: where ART is our priority! @endsection
@section('internal_css')
<style>
	#main_page_sidemenu{
		padding-top: 10px;
	}
	#main_page_content{
		padding-top: 10px;
		margin-left: 0px;
		padding-left: 15px;
		width: 680px;
		border-left: 1px solid #ccc;
	}
	#main_page_sidemenu ul li a{
		color: #78736d;
		font-size: 12px;
	}
	#main_page_sidemenu ul li a:hover{
		background-color: #383838;
		color: #ffffff;
		border-radius: none;
			-webkit-border-radius: 0px;
     	-moz-border-radius: 0px;
          border-radius: 0px;
	}
	#main_page_sidemenu ul li.active a{
		background-color: #982522;
		font-weight: bold;
		color: #ffffff;
		border-radius: none;
			-webkit-border-radius: 0px;
     	-moz-border-radius: 0px;
          border-radius: 0px;
	}
</style>
@endsection

@section('content')
	<div class="row">
		<div id="main_page_sidemenu" class="span3">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="browse/digitalart">Digital Art</a></li>
				<li><a href="browse/digitalart">Traditional Art</a></li>
				<li><a href="browse/digitalart">Photography</a></li>
				<li><a href="browse/digitalart">Film and Animation</a></li>
			</ul>
		</div>
		<div id="main_page_content" class="span8">
			asdf
		</div>
	</div>
@endsection
@section('js_scripts')

@endsection