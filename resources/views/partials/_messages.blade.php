@if($flash = session('success'))
	<div id="successMessage" class="notification is-success">
	  <button class="delete" id="deleteMessage"></button>
		{{ $flash }}
	</div>
@endif

@if($flash = session('formSend'))
	<div id="formSuccess" class="notification is-success">
	  <button class="delete" id="deleteMessage"></button>
		{{ $flash }}
	</div>
@endif