@layout('interface.default')
@section('title') {username} on snapArt @endsection
@section('internal_css')
<style>
#profile_header_holder{
	width: 100%;
	margin-top: 30px;
}
#profile_header_menu{
	width: 940px;
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
	padding: 5px;
}
#profile_submenu_holder{
	width: 930px;
	margin: auto;
}
#profile_submenu_holder ul{
	list-style-type: none;
	padding:0;
	margin:0;
}
#profile_submenu_holder ul li{
	display: inline-block;
}
#member_interest_banner{
	text-align: left;
	font-weight: normal;
}
#member_interests, #member_username{
	margin-bottom: -3px;
}
#member_username_gender_country{
	margin-left: 25px;
	text-align: left;
	font-weight: normal;
}
#member_timespan{
	text-align: left;
	font-weight: normal;
	margin-right: 10px;
}
.neutral_button{
	border: 1px solid #ffffff;
	background-color: inherit;
}
.btn_profile{
	height: 37px;
}
#aboutme_dropdown{
	width: 250px;
}
#aboutme_dropdown li{
	padding: 5px 10px;
}
.drp_label{
	/*margin-bottom: */
}
.drp_content{
	margin-top: -10px;
}
#profile_main_content{
	width: 900px;
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
		  <li class="active header_profile_menu"><a href="/{{ Auth::user()->username }}">Profile</a></li>
		  <li class="header_profile_menu"><a href="/{{ Auth::user()->username }}/gallery">Gallery</a></li>
		  <li class="header_profile_menu"><a href="#">Favorites</a></li>
		  <li class="header_profile_menu"><a href="#">Journal</a></li>
		</ul>
	</div>
	<div id="profile_header_submenu">
		<div id="profile_submenu_holder">
			<ul>
				<li id="member_aboutme" class="btn-group">
					<a class="btn white_button btn_profile neutral_button dropdown-toggle" id="aboutme_button" data-toggle="dropdown" href="#">
						<strong class="caret pull-right"></strong>
						<div id="member_interest_banner" class="pull-left">
							<div id="member_interests">Photography</div>
							<div id="member_banner">Member</div>
						</div>
						<div id="member_username_gender_country" class="pull-right">
							<div id="member_username">~ricomonster</div>
							<div id="member_gender_country">Male / United States</div>
						</div>
					</a>
					<ul id="aboutme_dropdown" class="dropdown-menu">
				    <li>
				    	<div class="drp_label">
				    		<h5>Member</h5>
				    	</div>
				    	<div class="drp_label">
				    		<h5>ricomonster</h5>
				    	</div>
				    	<div class="drp_content">
				    		Male / United States
				    	</div>
				    	<div class="drp_label">
				    		<h5>Birthday</h5>
				    	</div>
				    	<div class="drp_content">
				    		January 23
				    	</div>
				    </li>
				  </ul>
				</li>
				<li id="member_activity" class="btn-group">
					<a class="btn white_button btn_profile neutral_button dropdown-toggle" id="membership_button" data-toggle="dropdown" href="#">
						<strong class="header_caret caret pull-right"></strong>
						<div id="member_membership" class="pull-left">
							<div id="member_timespan">Joined this week!</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection
@section('content')
<div id="profile_main_content" class="row">
	<!-- Left Column -->
	<div class="span5 well">
		Newest Snap
	</div>
	<div class="span5 well">
		Favorites
	</div>
	<div class="span5 well">
		Watchers
	</div>
	<div class="span5 well">
		Groups
	</div>

	<!-- Right Column -->
	<div class="span5 well">
		Journal
	</div>
	<div class="span5 well">
		snapID
	</div>
	<div class="span5 well">
		Comments
	</div>
</div>
@endsection
@section('js_scripts')
<script type="text/javascript">
	(function(){
		$("#aboutme_button, #membership_button").on("mouseenter", function(){
			$(this).removeClass('neutral_button');
		}).on("mouseleave", function(){
			$(this).addClass('neutral_button');
		});
	})();
</script>
@endsection