@extends('layouts.app')

@section('content')

<div class="editWrapper">
	
	@include('partials._messages')

	{!! Form::model($page, ['method' => 'PATCH', 'route' => ['pages.update', $page->id], 'files' => true]) !!}
	
		<!-- Page Title -->
		<div class="titleBlock">
			<h2>Pagina Titel</h2>
			{{ Form::label('') }}
			{{ Form::text('name', $page->name) }}
		</div>

		<div class="stringBlock">
			
		</div>

		<!-- String Title -->
		@if(count($words) > 0)   
			<hr>                      
			<div class="titleBlock">
				<h2>Koppen</h2>
			</div>
		@endif

		<!-- Show each string in a block -->
		@foreach($words as $word)
		  	<div class="stringBlock">
				{{ Form::label('Titel') }}
				{{ Form::text('string[]', $word->word) }}
			</div>
 		@endforeach

 		<!-- Textarea Title -->
 		@if(count($textareas) > 0)
 		 	<hr>
			<div class="titleBlock">
				<h2>Tekstvlakken</h2>
			</div>
		@endif

		<!-- Show each textarea in a block -->
		@foreach($textareas as $textarea)
	  		<div class="textareaBlock">
	  			{{ Form::label('Tekstvlak') }}
				{{ Form::textarea('textarea[]', $textarea->textarea) }}
			</div>
 		@endforeach

 		<!-- File Title -->
 		@if(count($files) > 0)
 		 	<hr>
			<div class="titleBlock">
				<h2>Files</h2>
			</div>
		@endif

 		<!-- Show each file in a block -->
 		@foreach($files as $file)
			<div class="fileBlock">
				<div class="uploadedFile">
					<img src="{{ URL::asset('storage/images/' . $file->file) }}">
				</div>
				{{ Form::label('') }}
				{{ Form::file('image[]', ['class' => 'uploadButton']) }}
			</div>
 		@endforeach

		<!-- Submit and delete form -->
		<div class="submitBlock">
	
		<!-- Save changes -->
		<div class="button-save">
			{{ Form::submit('Submit', ['class' => 'button hvr-fade']) }}			
		</div>

	{!! Form::close() !!}

 		@if (Auth::user()->admin === 1)
		<!-- Delete Page -->	
		{!! Form::open(['method' => 'DELETE', 'route' => ['pages.destroy', $page->id], 'onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}

			<div class="button-delete">
		    	{{ Form::submit('Delete page', ['class' => 'button hvr-fade']) }}
			</div>

		{!! Form::close() !!}
		@endif

	</div>

</div>
@endsection