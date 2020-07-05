
    <header>
		<div class="container-fluid position-relative no-side-padding">

			
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="{{route('home')}}" ><img style="float: left;margin-top:6px;width:50px;height:50px;border-radius:50px;" src="{{asset('site/images/logo.jpg')}}" alt="tiny logo"></a>
				</li>
				<li><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('post.content')}}">Image Content </a></li>
				<li><a href="{{route('video.content')}}">Video Content</a></li>
				@guest

				<li><a href="{{route('login')}}">Login</a></li>
				
				@else 

				@if (Auth::user()->role_id== 1 )
				<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li> 
				@endif 

				@endguest
			
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="fa fa-search "></i></button>
					<input class="src-input" type="text" placeholder="Type of search">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>
