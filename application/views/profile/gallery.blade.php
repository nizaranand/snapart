@layout('interface.default')
@section('title') {username} on snapArt @endsection
@section('internal_css')
<style>
#profile_header_holder{
	width: 100%;
	margin-top: 30px;
}
#profile_header_menu{
	width: 960px;
	margin: auto;
}
#profile_header_menu ul{
	list-style-type: none;
	padding:0;
	margin:0;
}
#profile_header_menu ul li{
	display: inline-block;
	padding: 5px 20px;
}
#profile_header_menu ul li#profile_image_holder{
	margin-bottom: 10px;
	margin-top: -22px;
	padding: 5px 0px;
}
#profile_header_menu ul li#profile_image_holder img{
	margin-bottom: 10px;
	margin-top: -22px;
}
#profile_header_menu ul li#profile_name_holder{
	padding: 5px 20px 0px 0px;
}
#profile_header_menu ul li#profile_name_holder a h3{
	margin: 0;
	margin-top: -35px;
	margin-bottom: -10px;
}
#profile_header_menu li.active{
	border-bottom: 3px solid #982522;
}
#profile_header_menu li.active a{
	color: #333333;
}
.header_profile_menu{
	margin-bottom: 10px;
}
.header_profile_menu a{
	font-weight: bold;
	color: #a2a2a2;
}
.header_profile_menu:hover a{
	text-decoration: none;
}
.header_profile_menu:hover{
	border-bottom: 3px solid #982522;
}
#profile_flname_holder{
	margin-top: -10px;
	margin-left: 15px;
}
#profile_header_submenu{
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	margin-top: -17px;
	padding: 10px 5px;
}
#profile_submenu_holder{
	width: 960px;
	margin: auto;
}
</style>
@endsection
@section('sub_header')
<div id="profile_header_holder">
	<div id="profile_header_menu">
		<ul>
			<li id="profile_image_holder">
				<img src="{{ URL::base() }}/assets/default.jpg" width="50px"/>
			</li>
		  <li id="profile_name_holder">
		  	<a href="#"><h3>~{{ Auth::user()->username }}</h3></a>
		  	<div id="profile_flname_holder">Firstname Lastname</div>
		  </li>
		  <li class="header_profile_menu"><a href="/{{ Auth::user()->username }}">Profile</a></li>
		  <li class="active header_profile_menu"><a href="/{{ Auth::user()->username }}/gallery">Gallery</a></li>
		  <li class="header_profile_menu"><a href="#">Favorites</a></li>
		  <li class="header_profile_menu"><a href="#">Journal</a></li>
		</ul>
	</div>
	<div id="profile_header_submenu">
		<div id="profile_submenu_holder">
			asdf
		</div>
	</div>
</div>
@endsection
@section('content')
<div id="profile_gallery_content" class="row">
	<div class="span3">
		asdf
	</div>
	<div class="span9">
		asdfsadf
	</div>
</div>
@endsection