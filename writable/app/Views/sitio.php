
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title> Living Beauty</title>

	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css ">
	
</head>

<body>
	<!-- NavBar --> 
	<nav class="navbar navbar-expand-sm navbar-dark bg-danger">
		 <div class="container fluid"> 
		 	<a class="navbar-brand" href="# ">
		 		<img src="public/assets/img/nat1.jpg" alt=""width="200">
		 	</a>
		 	<button class="navbar-toggler " 
		 		type="button" 
		 		data-toggler= "collapse" 
		 		data-target="#navbarSupportedContent"
		 		aria-controls="navbarSupportedContent"
		 		aria-expanded="false"
		 		aria-label="Toogle navigation"> 

		 		<span class="navbar-toggler-icon"> </span>
		 	</button>

		 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		 		 <ul class="navbar-nav ml-auto">

		 		 	<li class="nav-item"> 
		 		 		<a class="nav-link" href=" <?php echo base_url('acercade');>?">Quienes somos?</a>
		 		 	</li>

		 		 	<li class="nav-item"> 
		 		 		<a class="nav-link" href=" <?php echo base_url('contacto');>?">Contactanos</a>
		 		 	</li>

		 		 	<li class="nav-item"> 
		 		 		<a class="nav-link" href=" <?php echo base_url('pedi_aqui');>?">Pedidos</a>
		 		 	</li> 

		 		 	<li class="nav-item"> 
		 		 		<a class="nav-link" href=" <?php echo base_url('infgreso');>?">Ingresar</a>
		 		 	</li>
		 		 </ul>
		 	</div>

		 </div>
	</nav>

	// carrousel 
	<div class="carrousel" id="mainSlider" data-ride="carrousel">

		<div class="carrousel-iner">
			<div class="carrousel-item active">
				<img src="public/assets/img/logo.png" alt="" class="d-block w-100"> 
			</div>

			<div class="carrousel-item active">
				<img src="public/assets/img/logo.png" alt="" class="d-block w-100">

			</div>

			<div class="carrousel-item active">
				<img src="public/assets/img/logo.png" alt="" class="d-block w-100">

			</div>

			<div class="carrousel-item active">
				<img src="public/assets/img/logo.png" alt="" class="d-block w-100">

			</div>


		</div>
		
	</div>

	 <!-- RIBBON  -->
	 <div id="ribbon" class="container-fluid">
	 	
	 	<div id="birthday" class="container w-50 pl-5"> 

	 		<div class="row align-item-center">

	 			<div class="col-sm p-3">

	 				<img src="public/assets/img/nat1.png" class="w-75 mx-auto d-block" alt="">
	 			</div>
	 			
	 			<div class="col-sm p-3 text-light text-center">

	 				<p class="text-warning h3"> Today´s big </p>
	 				<h4> SALE</h4>

	 			</div>
	 		</div>

	 		

	 	</div>

	 </div>

	 <!-- secciones -->
	 <div id="games ">
	 	<div class="container-md p-5">
	 		<div class="row pt-5">
	 			<h3 class="text-center pb-5 pt-5 h1"> FACES  </h3>

	 		</div>
	 		<div class="row">
	 			<div class="col-sm">
	 				<div class="cardw-100  mb-5">
  						<img src="..." class="card-img-top" alt="...">
  							<div class="card-body">
    							<h5 class="card-title">Card title</h5>
   								<p class="card-text">pequña explicacion sobre el contenido de la tarjeta.</p>
    						
  							</div>
					</div>
	 			</div>
	 				
	 			<div class="col-sm">
	 					<div class="cardw-100  mb-5">
  							<img src="..." class="card-img-top" alt="...">
  								<div class="card-body">
    								<h5 class="card-title">Card title</h5>
   									<p class="card-text">pequña explicacion sobre el contenido de la tarjeta.</p>
    						
  								</div>
						</div>
	 			</div>

	 			<div class="col-sm">
	 				<div class="cardw-100  mb-5">
  						<img src="..." class="card-img-top" alt="...">
  						<div class="card-body">
    						<h5 class="card-title">Card title</h5>
   							<p class="card-text">pequña explicacion sobre el contenido de la tarjeta.</p>
    						
  						</div>
					</div>
	 			</div>
	 		</div>
	 		<div class="row">
	 			

	 			
	 		</div>
	 		
	 	</div>

	 </div>

	 <!-- FOOTER  -->
	 <script src="public/assets/js/popper.min.js" ></script>
	 <script src="public/assets/js/bootstrap.min.js" ></script>
</body>

</html>
