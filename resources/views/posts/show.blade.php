@extends('main')

@section('content')

<div class="columns is-gapless">
	<div class="column is-7">
		<div class="postWrapper">
			<span>{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
			<h1>{{ $post->title }}</h1>
			<p>{!! nl2br(e($post->body)) !!}</p>
		</div>
		
	</div>
	<div class="column">
		<div class="postImage">
			<img src="{{ asset('img/pexels-photo-295771.jpg') }}">		
		</div>
	</div>
</div>

<div class="otherPosts">
	<h1>Andere artikelen</h1>
	
	@foreach($posts as $post)
		<div class="postLink">
			<a href="{{ route('posts.show', $post->id) }}">
				<h3>{{ $post->title }}</h3>
				<h4>{{ date('d-m-Y', strtotime($post->updated_at)) }}</h4>	
			</a>
		</div>
	@endforeach
</div>



@endsection