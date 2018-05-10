<?php
	function linha( $semana, $mes )
	{
		$formatoInicio = "";
		$formatoFinal = "";
		echo "<tr>";
		for ($i = 0; $i <=6; $i++) {
			if (isset($semana[$i])) {
				if ( $i == 0 ) {
					$formatoInicio = "<font color='red'>";
					$formatoFinal = "</font>";
				} elseif ( $i == 6 ) {
					$formatoInicio = "<b>";
					$formatoFinal = "</b>";
				}
				if ( $semana[$i] == date('d') && $i != 6 && $mes == date('m') ) {
					$formatoInicio = "<font color='blue'><b>";
					$formatoFinal = "</b></font>"; 
				}
				echo "<td>{$formatoInicio}{$semana[$i]}{$formatoFinal}</td>";
			} else {
				echo "<td></td>";
			}
			$formatoInicio = "";
			$formatoFinal = "";
		}
		echo "</tr>";
	}
	
	function calendario($mes)
	{
		$dia = 1;
		$ano = date('Y');
		$semana = array();
		
		//$inicio_mes = date('N',mktime(0, 0, 0, date('m') , 1 , date('Y')));
		//$ultimo_dia = date("t");
		
		$inicio_mes = date('N',mktime(0, 0, 0, $mes , 1 , date('Y')));
		$ultimo_dia = date("t",mktime(0, 0, 0, $mes , $dia , $ano));
		
		if ( $inicio_mes < 7 ) {
			for ( $i = 1; $i <= $inicio_mes; $i++ ) {
				array_push($semana, "");
			}
		}
		//setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.pt_utf-8', 'Portuguese_Brazil');
		setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
		
		echo "<h3> Calendário do mês de " . ucfirst(utf8_encode(strftime('%B', mktime(0, 0, 0, $mes , 1 , date('Y'))))) . " de " . date('Y') . "</h3>";
		echo "<table border='1'>
				<tr>
					<th>Dom</th>
					<th>Seg</th>
					<th>Ter</th>
					<th>Qua</th>
					<th>Qui</th>
					<th>Sex</th>
					<th>Sáb</th>
				</tr>";
		
		while ($dia <= $ultimo_dia) {
			array_push($semana, $dia);
			
			if (count($semana) == 7) {
				linha($semana, $mes);
				$semana = array();
			}
			
			$dia++;
		}
		linha($semana, $mes);
		echo "</table>";
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>	
</head>
<body>
	<?php
		for ( $i = 1; $i <= 12; $i++ ) { 
			calendario($i); 
		}
	?>
</body>
</html>


