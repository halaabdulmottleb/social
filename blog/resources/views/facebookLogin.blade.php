<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
    	body{

    		background: rgb(34,193,195);
            background: linear-gradient(90deg, rgba(34,193,195,1) 48%, rgba(45,253,205,1) 100%);
    	    }
    </style>
  </head>
  <body>
    <div class="container">
    	<br><br><br><br><br>
	    <div class="row mt-4">
	    	<div class="col-md-4 offset-md-4 text-center mt-4">
	    		<div class="card mt-4"  style="width: 25rem;">
                   <div class="card-body">
  						@if(!Auth::check())
                     <a class="btn btn-lg btn-primary btn-block" href="{{ url('auth/facebook') }}">
	    					<strong> <img src="https://img.icons8.com/color/35/000000/facebook-new.png"/> Login With Facebook</strong>
	    		    </a>
   						 @else 
   						 <img src="{{Auth::user()->profile}}" class="rounded-circle">
   						 <br><br>
   						 <a href="/home" class="btn btn-primary">
   						 	Continue as {{Auth::user()->name}}
   						 </a>
   						 <br>
   						 <p>Not {{Auth::user()->name}}?  <a href="{{ url('logout')}}">logout</a> </p>
   						


   						 @endif
                   </div>
                </div>
	    		
	    	</div>
	    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>