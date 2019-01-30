@extends('layouts.app')

@section('content')

<div class="editWrapper">

	<form method="POST" action="{{ route('pages.store') }}" enctype="multipart/form-data">

		<!-- Page Title -->
		<div class="titleBlock">
			<h2>Page Title</h2>
			<label></label>
			<input type="text" name="name" required>
		</div>
		
		<!-- String title, add- and remove button -->
		<div class="titleBlock">
			<h2>Titles</h2>
			
			<!-- Adding String -->	
			<div class="addButton" @click="addString"> 
				<i class="fa fa-plus" aria-hidden="true"></i> 
			</div>

			<!-- Removing String -->
			<div class="addButton" @click="removeString(string)">
				<i class="fa fa-minus" aria-hidden="true"></i>
			</div>
		</div>

		<!-- For each string, add one input field -->
		<div v-for="string in strings">
			<div class="stringBlock">
				<label></label>
				<input type="text" class="stringInput" name="string[]" required>
			</div>
		</div>

		<!-- Textarea title, add- and remove button -->
		<div class="titleBlock">
			<h2>Textareas</h2>
			
			<!-- Adding Textarea -->	
			<div id="plus" class="addButton" @click="addTextarea"> 
				<i class="fa fa-plus" aria-hidden="true"></i> 
			</div>

			<!-- Removing Textarea -->
			<div id="minus" class="addButton" @click="removeTextarea(textarea)">
				<i class="fa fa-minus" aria-hidden="true"></i>
			</div>
		</div>

		<!-- For each textarea, add one textarea -->
		<div v-for="textarea in textareas">
			<div class="textareaBlock">
				<label></label>
				<textarea name="textarea[]" required></textarea>
			</div>
		</div>

		<!-- File title, add- and remove button -->
		<div class="titleBlock">
			<h2>Files</h2>
			
			<!-- Adding File -->	
			<div id="plus" class="addButton" @click="addFile"> 
				<i class="fa fa-plus" aria-hidden="true"></i> 
			</div>

			<!-- Removing File -->
			<div id="minus" class="addButton" @click="removeFile(file)">
				<i class="fa fa-minus" aria-hidden="true"></i>
			</div>
		</div>

		<!-- For each file, add one file -->
		<div v-for="file in files">
			<div class="textareaBlock">
				<label></label>
				<input type="file" name="image[]">
			</div>
		</div>
		
		<!-- Submit form -->
		<div class="submitBlock">
			<div class="button-save">
				<input type="submit" class="button hvr-fade" value="Submit">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
        		{{ method_field('POST') }}
			</div>
		</div>

	</form>

</div>

@endsection