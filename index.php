<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  	<!-- Navbar -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">Punjab National Bank</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			<li class="nav-item">
          				<a class="nav-link active" href="index.php">Home</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="customers.php">Our Customers</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="transactions.php">Transfer History</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Converter</a>
        			</li>
        		</ul>
    		</div>
  		</div>
	</nav>

	<section id="welcome">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 text-center" id="welcometo">Welcome to <div id="pnb">Punjab National Bank</div></div>
				<div class="col-md-6 text-center">
					<img src="https://t4.ftcdn.net/jpg/02/67/21/53/360_F_267215381_GP8fNosJ79IKChWrX4Msz4iF5kk9Rr8Y.jpg">
				</div>
			</div>
		</div>
	</section>

	<section id="mission">
		<div class="container-fluid">
			<div class="row">
				<div class="text-center"><div id="mission-head">Mission</div>
					<p style="padding-top: 10px;">"Creating Value for all its customers,Investors and Employees for being the first choice for all stakeholders"</p>
				</div>
			</div>
		</div>
	</section>

	<section id="vision">
		<div class="container-fluid">
			<div class="row">
				<div class="text-center"><div id="vision-head">Vision</div>
					<p style="padding-top: 10px;">"To position PNB as the `Most Preferred Bank` for customers, the `Best Place to Work In` for employees and a `Benchmark of Excellence` for the industry"</p>
				</div>
			</div>
		</div>
	</section>

	<footer class="panel-footer">
		<div class="container">
			<div class="text-center">&copy; Copyright Punjab National Bank India 2021</div>
		</div>
	</footer>

  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


