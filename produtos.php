<?php

include "cabecalho.php";

$tipos = ["Antipasti (antes da comida)", "Primo piatto (primeiro prato)", "Sobremesa"];

$p[0] = "Bruschetta";
$p[1] = "Calamari Fritti";
$p[2] = "Penne alla toscana";
$p[3] = "Cose Indiavolate";
$p[4] = "Carpaccio di Manzo";
$p[5] = "Crostine Portobello";//Entrada
$p[6] = "Penne Bolonhesa e Bacon";
$p[7] = "Ravioli";
$p[8] = "Rizoto";
$p[9] = "Espaguete ao Pesto di Oliva";
$p[10] = "Massa Italiana com filé";
$p[11] = "Pudim de Leite Condençado";//principal
$p[12] = "Panna Cotta";
$p[13] = "Cannoli";
$p[14] = "Tiramisu";
$p[15] = "Gelatos";
$p[16] = "Zeppole";
$p[17] = "Pudim de Leite Condençado";
$valor = ["R$ 30,85", "R$ 28,00", "R$ 25,00", "R$ 30,00", "R$ 35,00", "R$ 25,00", "R$ 30,85", 
"R$ 28,00", "R$ 25,00", "R$ 30,00", "R$ 35,00", "R$ 25,00", "R$ 30,85", "R$ 28,00", "R$ 25,00", 
"R$ 30,00", "R$ 35,00", "R$ 25,00"];
$i = 0;

for($cont = 0; $cont<3; $cont++){ 
	echo "<h4>$tipos[$cont]</h4>";

	while($i < (6*($cont+1))){ 
		echo "<div class='produtos'>
			<li>
				<h3>". $p[$i];
				echo "</h3>
				<p>".$valor[$i]."</p>
				<figure><img src='img/".$p[$i];
				echo ".jpg'/></figure>
				<a href='produtos.php'>Comprar</a>
			</li>
		</div>";
		$i++;
	}

}
include "rodape.php";

?>