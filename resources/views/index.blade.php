@extends('main')

@section('content')

@include('partials._messages')

{{--
<div class="banner">
	<img src="{{asset('img/nik-macmillan-280300.jpg')}}">
	<div class="bannerText">
		<h1 class="bannerTitle">A.M. LOK</h1>
		<h2 class="bannerSubtitle">Een kleinschalig administratiekantoor met een persoonlijke touch.</h2>
	</div>
</div>


<div class="columns is-gapless">
	<div class="column">
		<div class="aboutUs" id="aboutUsScroll">
			<div class="aboutUsText">
				<h1 class="title">{{ $words[0]->word }}.</h1>
				<p>{!! nl2br(e($textareas[0]->textarea)) !!}</p>
			</div>
		</div>
	</div>
	<div class="column">

		<div class="aboutUsPhoto">
			<img src="{{asset('img/nik-macmillan-280300.jpg')}}" id="aboutUsImage">
		</div>
	</div>
</div>


<div class="blockWrapper">
	<div class="columns is-gapless">
		<div class="column">
			<div class="block">
				<div class="blockIcon">
					@include('icons._talking')
				</div>
				<h1 class="title">{{ $words[1]->word }}.</h1>
				<p>{!! nl2br(e($textareas[1]->textarea)) !!}</p>

			</div>
		</div>
		<div class="column">
			<div class="block">
				<div class="blockIcon">
					@include('icons._service')
				</div>
				<h1 class="title">{{ $words[2]->word }}.</h1>
				<p>{!! nl2br(e($textareas[2]->textarea)) !!}</p>

			</div>
		</div>
		<div class="column">
			<div class="block">
				<div class="blockIcon">
					@include('icons._creditcard')
				</div>
				<h1 class="title">{{ $words[3]->word }}.</h1>
				<p>{!! nl2br(e($textareas[3]->textarea)) !!}</p>

			</div>

		</div>
	</div>
</div>



<h1 class="updatesTitle" id="updateScroll">Updates</h1>

<div class="columns is-gapless">

	<div class="column is-7">
		<div class="updatesImage">
			<div>
				<img src="{{asset('img/breather-7169.jpg')}}">
			</div>
		</div>
	</div>
	<div class="column is-5">
		<div class="updates">
			<ul>
			@if(count($posts) > 0)
			@foreach($posts as $post)

				<li class="updateItem">
					<div class="updateItemImage">

						<img src="{{asset('img/breather-7169.jpg')}}">

					</div>
					<a href="{{ route('posts.show', $post->id) }}">
					<div class="updateItemInfo">
						<h2>{{ $post->title }}</h2>
						<h3>{{ date('d-m-Y', strtotime($post->updated_at)) }}</h3>
					</div>
					</a>
				</li>
			@endforeach

				<li>
					<a href="{{ route('posts.show', $latestPost->id) }}" class="underline">Bekijk alle</a>
				</li>
			</ul>
			@endif
		</div>
	</div>
</div>

<div class="contactWrapper">
	<div class="columns">
		<div class="column is-5">
			<div class="contactForm" id="contactScroll">

				<h1>Contact /tijdelijk offline/</h1>

			    <form method="POST" action="{{ route('email.store') }}">

			    <label name="name">Naam:</label>
			    <input id="name" name="name" type="text" required>

			    <label name="email">E-mailadres:</label>
			    <input id="email" name="email" type="text" required>

			    <label name="message">Bericht:</label>
			    <textarea id="message" name="message" required></textarea>

			    <input type="submit" value="Verzenden" disabled>

			    <input type="hidden" name="_token" value="{{ Session::token() }}">

			    </form>

			</div>

		</div>
		<div class="column">

			<div class="googlemap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.4174433755957!2d5.908950451400585!3d52.54397357971979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7d63008cae0fd%3A0x92c79aa58bfb5e6d!2sCiter+24%2C+8265+RA+Kampen!5e0!3m2!1snl!2snl!4v1501869133565" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</div>
	</div>
</div> --}}


@endsection
