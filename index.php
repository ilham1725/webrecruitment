<!DOCTYPE html>
<html>
<head>
	<title>Web Recruitment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
     
      
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="#" width="25" height="30" class="d-inline-block align-top mt-1" alt="">
    Brand
  </a>
</nav>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Carrer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Disabled</a>
      </li>
    </ul>
     <button type="button" class="btn btn-danger">Logout</button>		
  </div>
</nav>
<!--Start Content-->

 <form method="post">
  	<div style="background-color:  white;
  				margin-top: 10%;
  				border-radius: 8px 8px 8px 8px;
  			
  				" class="container">
  		<div class="row">
  			
  		<div class="col-md-12">
  			<h5 style="border-bottom: 0.01px dotted black;
  					   margin-top: 2%;" class="text-black">REGISTER!</h5>
  			<div class="form-row">
  				<div class="col-md-4">
  					<h5 class="text-black">Email</h5>
 						<div class="form.group">
 							<input type="email" name="email" class="form-control"  placeholder="e.g. ilhamgadang123@gmail.com">
 						</div>
  				</div>
  				<div class="col-md-4">
  					<h5 class="text-black">Full Name</h5>
 						<div class="form.group">
 							<input type="text" name="nama" class="form-control"  placeholder="Full Name">
 						</div>
  				</div>
  				<div class="col-md-4">
  					<h5 class="text-black">Phone Number</h5>
 						<div class="form.group">
 							<input type="password" name="password" class="form-control"  placeholder="e.g. 0823441248">
 						</div>
  				</div>
  				
  			</div>
  			<div class="form-row">
  			<div class="col-md-6">
  					<h5 class="text-black">Password</h5>
 						<div class="form.group">
 							<input type="password" name="password" class="form-control"  placeholder="Password">
 						</div>
  				</div>
  				<div class="col-md-6">
  					<h5 class="text-black">Re-Type Password</h5>
 						<div class="form.group">
 							<input type="password" name="password2" class="form-control"  placeholder="Re-Type Password">
 						</div>
  				</div>

  			</div>
  			<button style="margin-bottom: 1%;" type="button" name="submit" class="btn btn-info mt-2">Create Account</button> <h6>Already Have Account?, <a href="login.php">Login</a></h6>
  			</div>

  			
  		</div>
  	</div>
  </form>

</body>
</html>