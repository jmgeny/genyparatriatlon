<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<title>Paratriatlon @yield('title')</title>
    <link rel="shortcut icon" href="img/Geny.ico" />

	<link rel="stylesheet" href="{{ 'css/bootstrap.min.css' }}">

	<script src="https://kit.fontawesome.com/93f901670c.js" crossorigin="anonymous"></script>
	
    {{-- styles custom --}}
    <link rel="stylesheet" href="{{ 'css/style_geny.css' }}">

</head>
<body>
	<nav>
		<div class="row">
			<div class="col-8">
				<img src="img/GenyParatriatlonTransparente.png" alt="geny">
				<img src="img/paratriathlon_logo_onblue.jpg" alt="itu">
			</div>
			<div id="redes" class="pull-right col-4">
				@include('redes')
			</div>
		</div>
	</nav>
        <div class="container-fluid position-ref full-height">
            @yield('content')
        </div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>