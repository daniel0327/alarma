<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	
	
	 <div id='reportes'>

	 
	<?php 
	
	
	$variablephp=$tutelas;
	$variable=$quejas;
	$info=$informacion;
    $cons=$consulta;

	
	?>


	
	

	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	   <title>Estadisticas con Jquery | Jquery Easy</title>
		<script type="text/javascript" src="http://localhost/alarma/application/views/graficos/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="http://localhost/alarma/application/views/graficos/js/highcharts.js"></script>
		<!-- Este archivo es para darle un estilo (Este archivo es Opcional) -->
	    <script type="text/javascript" src="http://localhost/alarma/application/views/graficos/js/themes/grid.js"></script>
		<!-- Este archivo es para poder exportar losd atos que obtengamos -->
		<script type="text/javascript" src="http://localhost/alarma/application/views/graficos/js/modules/exporting.js"></script>
	
		<script type="text/javascript">
		
		var variablejs = <?php echo $variablephp; ?> ;
		var variablejs2 = <?php echo $variable; ?> ;
		var variablejs3 = <?php echo $info; ?> ;
		var variablejs4 = <?php echo $cons; ?> ;

			var chart;
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Estadistica Derechos de Petición y Tutelas'
					},
					tooltip: {
						formatter: function() {
							return '<b>'+ this.point.name +'</b>: '+ this.y +' Und';
						}
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
				    series: [{
						type: 'pie',
						name: 'Browser share',
						data: [
							['Tutela',   variablejs],
							['Dp Quejas', variablejs2], 	
							['Dp informacion', variablejs3],
							['Dp consultas',    variablejs4]
							
							
						]
					}]
				});
			});
				
		</script>
		
		
		
<style type="text/css">
		   h4{ font-family:Arial, Helvetica, sans-serif;
		   color:#630;}

		     .boton{
		           font-size:10px;
		           font-family:Verdana,Helvetica;
		           font-weight:bold;
		           color:white;
		           background:black;
		           border:0px;
		           width:130px;
		           height:25px;
		          }
		   header
		   {
		     background: #20912D;
		     -webkit-border-radius: 40px;
		     border-radius: 40px;
		   }
		   footer
		   {
		     background: #20912D;
		     -webkit-border-radius: 40px;
		     border-radius: 40px;
		     height: 90px;
		   }

		   p
		   {
		     font-size: 25px;
		     padding-top: 32px;
		   }
		   #logo{
		         display: block;
		           margin: 15px auto;
		           height: 165px;
		           padding-top: 10px;
		           padding-bottom: 10px;
		         }


</style>	
	</head>
<body>

	<header>
	  <img src="http://localhost/alarma/assets/images/uniquindio.PNG" id="logo">
	</header>	
	<center><h4>Graficos </h4></center>
	
	<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
    <div align="left">

	 <input type="button" class='boton' value="Volver al inicio" onclick="history.back(-1)" />
  </div>
	
		
  	<footer>
      <p align="center"> Pertinente Creativa Integradora</p>
    </footer>		
</body>
</html>
