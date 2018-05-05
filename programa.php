<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
echo "Hoje é dia " . date('d/m/y L');
echo " agora são " . date('h:i:s A');
echo strftime("%A, %d de %B de %Y", time());	
	

	//$date = '2011-05-08';
	//echo strftime("%A, %d de %B de %Y", strtotime( $date ));