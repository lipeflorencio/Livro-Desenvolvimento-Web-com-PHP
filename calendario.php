<?php
	function linha( $semana )
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
				if ( $semana[$i] == date('d') && $i != 6 ) {
					$formatoInicio .= "<b>";
					$formatoFinal = "</b>" . $formatoFinal; 
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
	
	function calendario()
	{
		$dia = 1;
		$semana = array();
		
		$inicio_mes = date('N',mktime(0, 0, 0, date('m') , 1 , date('Y')));
		$ultimo_dia = date("t");
		
		if ( $inicio_mes < 7 ) {
			for ( $i = 1; $i <= $inicio_mes; $i++ ) {
				array_push($semana, "");
			}
		}
		
		while ($dia <= $ultimo_dia) {
			array_push($semana, $dia);
			
			if (count($semana) == 7) {
				linha($semana);
				$semana = array();
			}
			
			$dia++;
		}
		linha($semana);
	}
	
?>

<h3> Calendário do mês de 
	<?php 
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
		echo strftime('%B', strtotime('today'));
	?> 
</h3>

<table border="1">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
	</tr>
	<?php calendario(); ?>
</table>