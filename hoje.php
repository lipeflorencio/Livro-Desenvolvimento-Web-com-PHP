<html>
	<head>
		<title>Dia <?php echo date('d'); ?></title>
	</head>
	<body>
		<h1>
			<?php  
				if ( date('H') >= 0 && date('H') < 12 ) {
					echo "Bom dia!";
				} elseif ( date('H') < 18 ) {
					echo "Boa tarde!";
				} else {
					echo "Boa noite!";
				}
				
			?>
		</h1>
		<h1>Estamos em <?php echo date('Y'); ?></h1>
		<p>
			Agora são <?php echo date('H'); ?> horas e <?php echo date('i'); ?> minutos.
		</p>
	</body>
</html>