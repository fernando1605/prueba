<?php

$acumulador = 0;

for ($i=1; $i<=31; $i++) 
{ 

	$resto = $i % 2;

	if ($resto == 0)
	{	
		print "<strong>Hoy es el día $i</strong><br>";
	}
	else
	{
		print "Hoy es el día $i<br>";
	}

	$acumulador = $acumulador + $i;

	if ($acumulador > 20)
	{
		print "<b>Se acabaron los días de vacaciones!!!</b>";
		break;
	}
}

print "<br>$acumulador";

?>
