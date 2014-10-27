<div class="row-fluid" style="margin-bottom:60px;">
	<nav class="navbar navbar-default navbar-fixed-top"   role="navigation">
		<div class="container-fluid">
			

			<div style="padding: 7px 0px 0px;" class="pull-right">
				
				@if(!Sentry::check())
				<!-- Button trigger modal -->
				<button class="btn btn-primary btn" data-toggle="modal" data-target="#registerModal">
					Signup
				</button>

				<!-- Button trigger modal -->
				<button class="btn btn-primary btn" data-toggle="modal" data-target="#loginModal">
					Login
				</button>
				@else
				<button class="btn btn-primary btn">
					<a href="{{ URL::route('user_logout') }}" style="color:white">Logout</a>
				</button>
				@endif

			</div>

		</div><!-- END .container-fluid --> 
	</nav>


</div>
