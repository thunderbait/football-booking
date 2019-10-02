<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/master.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

</head>
<body style="background: url('#') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover;">
	
	<!-- NavBar -->
	<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color: #4a9ff5">
  		<a class="navbar-brand" href="/">Golazo - Book A Pitch</a><span class="sr-only">(current)</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item dropdown">

		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Browse
		        </a>

		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        	<a class="dropdown-item" href="{{ route('cities' )}}">By City</a>
		        	<a class="dropdown-item" href="#">By Type</a>
		        	<a class="dropdown-item" href="#">By Size</a>
		        	<div class="dropdown-divider"></div>
		        	<a class="dropdown-item" href="/pitches/show">Browse All Pitches</a>
		        </div>

		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="/partners">Partners</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="/pricing">Pricing</a>
		      </li>

		      <li class="nav-item">
		      	<a class="nav-link" href="/about">About Us</a>
		      </li>

		    </ul>
			    
		  </div>
	</nav>
	
	<p>
		@yield('content')
	</p>

	<style>
	.footer {
	  position: fixed;
	  left: 0;
	  bottom: 0;
	  width: 100%;
	  background: white;
	  text-align: center;
	}
	</style>	

	<footer class="footer">
        <p class="float-left" style="margin-left: 25px"><a href="#"> Back to top</a></p>
        <p>&copy; Sotos &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
     </footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>