<nav class="navigation">

	<!-- Profile -->
	<div class="profile">
	
		<!-- Profile Picture -->
		<div class="profileImage">
			<img class="avatar" src="{{URL::asset('img/avatar.jpg')}}" alt="avatar">		

			<!-- Log Out Button -->
		    <a class="logoutButton" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		    	Logout
		    </a>
		    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		        {{ csrf_field() }}
		    </form>
			<!-- end Button -->	
		</div>

		<!-- Profile Info -->
		<div class="profileInfo">
			@if(Auth::user())	
				<h1>{{ ucfirst(Auth::user()->name) }}</h1>
			@endif
		</div>
	</div>
	@if(Auth::user())
		@if (Auth::user()->admin === 1)
			<!-- Adding page -->
			<div class="button-nav">
				<a class="button hvr-fade" href="{{ route('pages.create') }}">Add Page</a>
			</div>
		@endif
	@endif
	
		<!-- Blog -->
		<div class="button-nav">
			<a class="button hvr-fade" href="{{ route('posts.create') }}">Updates</a>
		</div>


	<div class="pages">

		<!-- Pages -->
		@foreach($pages as $page)
		
		<div class="menuItem">

			<h2>{{ $page->name }}</h2>
			<div class="button-nav">
				<a class="button hvr-fade" href="{{ route('pages.edit', $page->id) }}">Edit</a>
			</div>
		</div>
		
		@endforeach

	</div>

</nav>

