<!DOCTYPE html>
<html>
<head>
	@include('partials._head')
</head>

<body>
	@include('partials._nav')
    
	@yield('content')

	@include('partials._footer')

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="{{ asset('js/deleteMessage.js') }}"></script> 
	<script src="//cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>

</body>
</html>