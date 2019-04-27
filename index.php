<?php 
	$cantidad=0;
	$nombres="smith";
	// es un  lenguaje de expresiones
	//echo "Este mensaje es si la expresion devuelve true"; 
	//echo "<br/>linea2: Este mensaje es si la expre devuelve true" ;
	
 ?>	
 <table>
 	<tr>
 		<th>nombres</th>
 		<th>Apellidos</th>
 		<th>DNI</th>
 	</tr>
 	<?php if (1): ?>
 		<style type="text/css">
 			td {
 				background: green;
 				color: white;
 			}
 		</style>
 		<tr>
 			<td> Luis</td>
 			<td> gutierrez</td>
 			<td> 12465478</td>
 		</tr>
 		<tr>
 			<td> juan</td>
 			<td>huaroto</td>
 			<td> 15645664</td>
 		</tr>
 		<?php endid; ?>

 </table>


