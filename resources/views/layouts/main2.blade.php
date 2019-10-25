<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="theme-color" content="#000000"/>
	<meta name="msapplication-navbutton-color" content="#000000"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	
    <title>@yield('titulo')</title>

	<link rel="shortcut icon" href="{{asset('img/icono.ico')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->

	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

	<!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/all.js')}}"></script>
	<link href="{{asset('css/addons-pro/stepper.min.css')}}" rel="stylesheet">
	


</head>

<body>
    @include('components.alerts')
	
    @yield('contenido')
	
	

	<script type="text/javascript" src="{{asset('js/scripts.js')}}" ></script>	
	
    <!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
            
	<!-- google maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfElSCm1oarkG1XhX1Ac8vJ9tIFaYeVs"></script>
	<!-- google maps -->
	<script type="text/javascript" src="{{asset('js/scripts.js')}}" ></script>	
	
	<script type="text/javascript" src="{{asset('js/scriptStepes.js')}}" ></script>
	<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>

	<script type="text/javascript" src="{{asset('js/addons-pro/stepper.min.js')}}"></script>

	<script>
		$('#message').modal('show')
	</script>

    <script>
		function calcularTotal(){

			var inputtotal = document.getElementById("total");
			var inputtotalmes = document.getElementById("totalmes");

			// Obtener los valores seleccionados  
			                                   
			var elemento1_4 = $('#elemento1_4').is(':checked') ? 12750 : 0;
			var elemento1_5 = $('#elemento1_5').is(':checked') ? 12750 : 0;
			var elemento1_1 = 0; elemento1_1 = $('#elemento1_1').is(':checked') ? 15300 : 0;
			var elemento1_2 = 0; elemento1_2 = $('#elemento1_2').is(':checked') ? 12750 : 0;
			var elemento1_3 = 0; elemento1_3 = $('#elemento1_3').is(':checked') ? 12750 : 0; 

			var elemento2_6 = 0;     
			elemento2_6 = $('#elemento2_6').val() * 11900;

			var elemento2_7 = 0;     
			elemento2_7 = $('#elemento2_7').val() * 21250;			
			
			var elemento3_9 = $('#elemento3_9').is(':checked') ? 3400 : 0;
			var elemento3_10 = $('#elemento3_10').is(':checked') ? 5950 : 0;
			var elemento4_11 = $('#elemento4_11').is(':checked') ? 12750 : 0;
			var elemento5_12 = 0;     
			elemento5_12 = $('#elemento5_12').val() * 5100;
			var elemento5_13 = 0;     
			elemento5_13 = $('#elemento5_13').val() * 8500;
			var elemento6_14 = 0;     
			elemento6_14 = $('#elemento6_14').val() * 32750;
			var elemento6_15 = 0;     
			elemento6_15 = $('#elemento6_15').val() * 14025;
			var elemento6_16 = 0;     
			elemento6_16 = $('#elemento6_16').val() * 8500;
			var elemento6_17 = 0;     
			elemento6_17 = $('#elemento6_17').val() * 21250;
			var elemento6_18 = $('#elemento6_18').is(':checked') ? 21250 : 0;

			var elemento7_23 = $('#elemento7_23').is(':checked') ? 34000 : 0;

			var elemento8_28 = $('#elemento8_28').is(':checked') ? 29750 : 0;

			

			// Calcular valor
			var total = 
			parseInt(elemento1_1) + 
			parseInt(elemento1_2) + 
			parseInt(elemento1_3) + 
			parseInt(elemento1_4) + 
			parseInt(elemento1_5) + 
			parseInt(elemento2_6) + 
			parseInt(elemento2_7) + 
			parseInt(elemento3_9) + 
			parseInt(elemento3_10) + 
			parseInt(elemento4_11) + 
			parseInt(elemento5_12) + 
			parseInt(elemento5_13) + 
			parseInt(elemento6_14) + 
			parseInt(elemento6_15) + 
			parseInt(elemento6_16) + 
			parseInt(elemento6_17) + 
			parseInt(elemento6_18) + 
			parseInt(elemento7_23) + 
			parseInt(elemento8_28);

			inputtotal.value = total;
			inputtotalmes.value = "Total: "+total+ " CLP. Anual";

			totalMes = parseInt(total/12);

			$('#totalMes').html((totalMes));
		}    


		// A $( document ).ready() block.
		$( document ).ready(function() {
			calcularTotal(); // Gatillar al iniciar la página

			$( document ).on('change','.plan-control', function () {
				calcularTotal(); // Gatillar al efectuar un cambio en los que elementos que tenga class plan-control
			});
		});

	</script>


</body>
</html>