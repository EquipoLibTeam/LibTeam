<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">

	
	

	<title>LibTeam</title>
	<style>
	

	.container {
		
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
  	}
  	#vdo {
		
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
  	}
  	#hea{
  		background-color: #93D650;
  		color: #FFFFFF;
  	}
  	#film{
  		background-color: #547596;
  		color: #FFFFFF;
  	}
  	#step{
  		background-color: #4F92D6;
  		color: #FFFFFF;
  	}
  	#forml{
  		background-color: #fcf6d7;

  	}
		
	</style>
  	
  	

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid" >
		<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigat">
       		 <span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      	    <a class="navbar-brand" href="index.php"><img alt="Brand" src="img/logo.png" width="75"></a>
        </div>

        <div class="collapse navbar-collapse" id="navigat">
			<ul class="nav navbar-nav">
        		<li class="active"><a href="index.php">Inicio</a></li>
        		<li><a href="whoslibtm.php">Que es LibTeam?</a></li>
        		<li><a href="#">Quienes somos?</a></li>
        		<!--li><a><h3>Somos Liberation Team!!!</h3></a></li-->

        		
      		</ul>

      		<ul class="nav navbar-nav navbar-right">
      			<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Ayuda<b class="caret"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Aviso legal</a></li>
            			<li><a href="#">Contacto</a></li>
            			<li><a href="#">FAQs</a></li>
            			<!--<li class="divider"></li>
            			<li><a href="#">Separated link</a></li>
            			<li class="divider"></li>
            			<li><a href="#">One more separated link</a></li>-->
          			</ul>
        		</li>
        		<a class="navbar-brand" href="#"><img alt="Brand" src="img/sim.png" width="45"></a>
      		</ul>
        </div>

	</div>

	</nav>
<!-- contenedor header
	<div class="container-fluid " id="hea" >
		<div class="row">
			<div class="col-xs-6 col-sm-3  col-md-2  col-lg-2 ">
      			<img width="95"  src="img/logo.png" class="img-responsive">
        	</div>
			<div class="col-xs-0 col-sm-6 col-md-8 col-lg-8 hidden-xs " ><h1 id="titulo-p" align="center">Somos: Liberation Team!</h1>
			</div>
			<div class="col-xs-6 col-sm-3  col-md-2  col-lg-2 ">
      			<img align="right" width="70" src="img/sim.png" class="img-responsive">
        	</div>
		</div>	
	</div>-->
<!--contenedor video-->	
	<div class="container" id="film" >
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10  col-lg-10"><h3 align="center">LibTeam: Desbloqueo de celulares por IMEI</h3></div>
				<?php include 'carrucel.php' ?>
			</div><br>	
		</div>	
	</div>
<!--contenedor pasos-->
	<div class="container " id="step">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10  col-lg-10"><h3 align="center">Libera tu móvil en tres sencillos pasos:</h3></div>
		</div>
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-sm-offset-1 col-md-1  col-lg-1 hidden-xs">
        		<br><img  width="75" src="img/1.png" class="img-responsive">
        	</div>
			<div class="col-xs-3 col-xs-offset-1 col-sm-2 col-sm-offset-0 col-md-2  col-lg-2 ">
      			<img  width="150" src="img/form.png" class="img-responsive">
        	</div>
        	<div class="col-xs-1 col-sm-1 col-sm-offset-1 col-md-1  col-lg-1 hidden-xs ">
        		<br><img  width="75" src="img/2.png" class="img-responsive">
        	</div>
        	<div class="col-xs-3 col-xs-offset-1 col-sm-2 col-sm-offset-0 col-md-2  col-lg-2 ">
      			<img  width="150" src="img/mail.png" class="img-responsive">
        	</div>
        	<div class="col-xs-1 col-sm-1 col-sm-offset-1 col-md-1  col-lg-1 hidden-xs">
        		<br><img  width="75" src="img/3.png" class="img-responsive">
        	</div>
        	<div class="col-xs-3 col-xs-offset-1 col-sm-2 col-sm-offset-0 col-md-2  col-lg-2 ">
      			<img   width="150" src="img/mobile.png" class="img-responsive">
        	</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><p align="center">LLena el formulario</p></div>
			<div class="col-xs-4"><p align="center">Recibe tu codigo por E-mail</p></div>
			<div class="col-xs-4"><p align="center">Introduce el codigo en tu móvil</p></div>	
		</div>
	</div>
<!--contenedor form-->
	<div class="container" id="forml">
		<div class="row">
			<div class="col-xs-12"><h3 align="center">Llenar el formulario siguiente para cotizar tu liberación:</h3></div>
		</div>
		<form class="form-horizontal" action="conexion.php" method="POST" >
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">Nombre: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-user "></span></span>
					<input class="form-control" type="text" id="formGroup" name="nombre" required placeholder="Nombre" >
				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">Operador: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-signal "></span></span>
					<select class="form-control"  id="formGroup" name="operador" required placeholder="Operadora" >
						<option>Seleccione Operador</option>
						<option value="Telcel">Telcel</option>
						<option value="Movistar">Movistar</option>
						<option value="Unefon">Unefon</option>
						<option value="Iusacel">Iusacel</option>
						<option value="Nextel">Nextel</option>
						<option value="Claro">Claro</option>
					</select>

				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">E-mail: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope "></span></span>
					<input class="form-control" type="email" id="formGroup" name="mail" required placeholder="E-mail" >
				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">Metodo<br>pago: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-9 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card "></span></span>
					<select class="form-control"  id="formGroup" name="mdp" required placeholder="Metodo/Pago">
						<option>Seleccione Forma de pago</option>
						<option value="paypal">PayPal</option>
						<option value="Deposito bancario">Deposito bancario</option>
						<option value="Transferencia">Transferencia bancaria</option>
						<option value="Oxxo">Pago en Oxxo</option>
					</select>
				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">IMEI: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-pencil "></span></span>
					<input class="form-control" type="text" id="formGroup" name="imei" required placeholder="IMEI" >
				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">Numero Contacto: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-earphone "></span></span>
					<input class="form-control" type="text" id="formGroup" name="contacto" required placeholder="Numero telefonico" >
				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">Marca: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-registration-mark "></span></span>
					<select class="form-control"  id="formGroup" name="marca" required  placeholder="Marca">
						<option>Seleccione Marca</option>
						<option value="Alcatel">Alcatel</option>
						<option value="Blackberry">Blackberry</option>
						<option value="HTC">HTC</option>
						<option value="Huawei">Huawei</option>
						<option value="iPhone">iPhone</option>
						<option value="LG">LG</option>
						<option value="Motorola">Motorola</option>
						<option value="Nokia">Nokia</option>
						<option value="Orange">Orange</option>
						<option value="Samsung">Samsung</option>
						<option value="Siemens">Siemens</option>
						<option value="Sony">Sony Xperia</option>
						<option value="Vodafone">Vodafone</option>
						<option value="ZTE">ZTE</option>
						

					</select>
					
				</div>

			</div>
			<div class="form-group col-xs-12 col-sm-10 col-md-6">
				<label class=" col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 control-label hidden-md hidden-xs" for="formGroup" ><p align="left">Modelo: </p></label>
				<div class="input-group col-xs-9 col-sm-8 col-md-9 col-md-push-2 col-lg-push-0 col-xs-push-2 col-sm-push-0" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone "></span></span>
					<input class="form-control" type="text" id="formGroup" name="model" required  placeholder="Modelo">
				</div>

			</div>
			
				
			<button class="btn btn-lg btn-info btn-block" type="submit">Enviar solicitud <span class="glyphicon glyphicon-upload "></span></button><br>
			
			

		</form>

	</div>
<!--contenedor footer-->
	<div class="container-fluid" id="hea">
		<div class="row">
		<br>
			<!--Contenedor contactanos-->
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	      			<!--img align="right" width="25" src="img/fb.png" class="img-responsive">
	      	</div>
			<div class="col-xs-9 col-sm-4 col-md-4"><p>/liberationteam</p></div>
		</div-->
			<h4>Contactanos</h4>

			<div class="row">
				<div class="col-xs-12 col-lg-6">
					<div class="row">
						<div class="col-lg-2 col-xs-2">
							<img src="img/facebook.jpg">
						</div>
						<div class="col-lg-10 col-xs-10">
							<br><a href="#"><p align="left">Facebook/LibTeam_Mexico</p></a>
						</div>
					</div>
				</div>	

				<div class="col-xs-12 col-lg-6">
					<div class="row">
						<div class="col-lg-2 col-xs-2">
							<img src="img/twitter_alt.png">
						</div>
						<div class="col-lg-10 col-xs-10">
							<br><a href="#"><p align="left">@LibTeam_Mexico</p></a>
						</div>
					</div>
				</div>			
			</div>
			 
			<div class="row">
				<div class="col-xs-12 col-lg-6">
					<div class="row">
						<div class="col-lg-2 col-xs-2">
							<img src="img/youtube.png">
						</div>
						<div class="col-lg-10 col-xs-10">
							<br><a href="#"><p align="left">youtebe_LibTeam</p></a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-lg-6">
					<div class="row">
						<div class="col-xs-2 col-lg-2">
							<img src="img/google.png">	
						</div>
							
						<div class="col-xs-10 col-lg-10">
							<br><a href="#"><p>libteam@gamil.com</p></a>
						</div>

					</div>
				</div>			
			</div> 
			<label><p><font color="black">Telefono: 983-208-6107</font></p></label>

		</div>

		<!--Contenedor de formas de pago-->
		<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
	      	
	      	<h4>Formas de pago</h4>
			
			<div class="row">
				<div class="col-lg-6 col-xs-12">
					<div class="row">
						<div class="col-lg-6 col-xs-12">
							<img src="img/paypal.ico">	
						</div>

						<div class="col-lg-6 col-xs-12">
							<img src="img/oxxo.ico">
						</div>
					</div>	

				</div>
			</div>
			
			
				<div class="row">
						<div class="col-lg-6 col-xs-12">
					<div class="row">
						<div class="col-lg-6 col-xs-12">
							<img src="img/transferencia.ico">	
						</div>

						<div class="col-lg-6 col-xs-12">
							<img src="img/deposito.ico">
						</div>
					</div>	

				</div>
					</div>
			

		</div>	

			

		<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
	      	
	      	<h4>Aviso Legal</h4>

			<div class="row">
				<a href="#"><p><font color="black">Términos y condiciones</font></p></a>
				<a href="#"><p><font color="black">Políticas de privacidad</font></p></a>
				<a href="#"><p><font color="black">Acerca de LibTeam</font></p></a>
			</div>

		</div>

	

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>