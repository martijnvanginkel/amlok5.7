<!doctype html>
<html lang="nl">
<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administratiekantoor A.M. Lok</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>

<style>
	
	h1{
		margin:20px 0;
		font-style:bold;
	}

	h2{
		margin:20px 0;
	}

</style>

<div class="container">
	
	<h1>Bericht van {{ ucfirst($name) }}</h1>

	<p>{{ $msg }}</p>

	<h2>{{ $email }}</h2>

</div>

</body>
</html>
