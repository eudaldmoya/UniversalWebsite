<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.jpg">
    <title>Universal Studios Florida | Packs</title>

    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="css/estilos_home.css" rel="stylesheet" type="text/css">
    <link href="css/estilos_packs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="funciones_navbar.js"></script>
    <script src="js/funciones_packs.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>

<body id="packs" style="background-image: url(img/bg.png)" class="background">

    <?php include 'inc/navbar.php'; ?>

    <main role="main" class="container">
    </main>
    
    <div class="container-fluid" id="cuerpo">
	
	<div class="row">
		<div class="col-md-6">
			<p class="ppacks">HOTELS</p>	
			<div class="opciones">
				<p class="name">Surfside Inn and Suites Hotel</p>
				<img src="img/hotel1.jpg" alt="hotel1" class="img-responsive imagenes" id="h1">
				<p class="name">Loews Hotels and Co</p>
				<img src="img/hotel2.jpg" alt="hotel1" class="img-responsive imagenes" id="h2">
				<p class="name">Universal's Aventura Hotel</p>
				<img src="img/hotel3.jpg" alt="hotel1" class="img-responsive imagenes" id="h3">
				<p class="name">Universal's Cabana Bay Beach Resort</p>
				<img src="img/hotel4.jpg" alt="hotel1" class="img-responsive imagenes" id="h4">
			</div>
			<p class="ppacks">ATTRACTIONS</p>
			<div class="opciones">
				<p class="name">Hollywood Rip Ride Rockit</p>
				<img src="img/atraccion1.png" alt="hotel1" class="img-responsive imagenes" id="a1">
				<p class="name">Despicable Me Minion Mayhem</p>
				<img src="img/atraccion2.jpg" alt="hotel1" class="img-responsive imagenes" id="a2">
				<p class="name">MEN IN BLACK Alien Attack</p>
				<img src="img/atraccion3.jpg" alt="hotel1" class="img-responsive imagenes" id="a3">
				<p class="name">E.T. Adventure</p>
				<img src="img/atraccion4.jpg" alt="hotel1" class="img-responsive imagenes" id="a4">
			</div>
			
		</div>
		
		<div class="col-md-6">
			<p class="ppacks">CREATE YOUR PACK</p>
			<div class="checkout">
				<div class="rectangulo" id="hotel"> Drag here your favorite hotel</div>
				<div class="rectangulo" id="atraccion">Drag here your favorite attraction</div>
				<div id="pago">
					<span class="txt">Price: <span id="precio">0</span>€</span>
					<button class="boton" id="reservar">Book</button>
					<input type="button"  class="boton" value="Cancel" id="cancelar" />
				</div>
				</div>
			
		</div>
	</div>

	
	<div class="row" id="formulario">
	<div class="col-md-12">
		<form>
			 <input type="hidden" id="id"/>
			<div class="form-group">
				<label class="txt" for="nombre"> Name </label> <input type="text" id="nombre" class="form-control" placeholder="Full name" required autofocus><br>	
			</div>
			<div class="form-group">
				<label class="txt" for="direccion"> Direction </label> <input type="text" id="direccion" class="form-control" placeholder="Street nº" required  ><br>
			</div>
			<div class="form-group">
				<label class="txt" for="fecha"> Date </label> <input type="date" id="fecha" class="form-control" required  ><br>
			</div>
			<input type="button"  class="boton " value="Confirm" id="confirmar" />
			<input type="button"  class="boton " value="Clear" id="limpiar" />
		</form>
	</div>
	<div id="resultado"></div>
	</div>
</div>

    
    <?php include 'inc/footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
