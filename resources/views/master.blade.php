<!DOCTYPE html>
 <html lang="en">
 
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Validation Demo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

         <style>
            body {
                font-family: 'Nunito';
            }
        </style>
</head>

	<div class="header">
	@section('header')
	
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <!-- Brand -->
		  <a class="navbar-brand" href="/">Home</a>

		  <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Navbar links -->
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="/register">Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/gallery">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/rooms">Link</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="/feedback">Link</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="/rooms">Link</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="/rooms">Link</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	@show
	</div>


<div class="content">
	@section('content')
	<h1>Welcome to Home page of V4U...</h1>
	@show
</div>

<div class="page-footer">
	@section('footer')
	
	<div class="footer-copyright text-center py-3">© 2020 Copyright:
		<a href="https://www.veravaleducationsociety.org/"> www.v4u.com</a>
  </div>


	@show

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</div>


</html>