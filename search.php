<?php

//No se veran los Errores o Alertas
error_reporting(0);


//Obtener el valor de los campos
$city = $_POST["ciudad"];
$type = $_POST["Tipo"];
$price = $_POST["Precio"];

//Obtener los datos del JSON
$data = file_get_contents("data-1.json");
$propiedades = json_decode($data, true);

//Adaptar el valor del input precio para su funcionamiento
$valor = explode(";",$price);

//Si no se han selecionado ninguncampo se mostrara Todo
if($city == "x" and $type == "x"){
	foreach ( $propiedades as $prop ) {
		$venta = explode("$",$prop[Precio]);
		$venta = str_replace(",","",$venta);
		if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
      $articulos = "<div class='tituloContenido card'>";
			$articulos .="<div class='row'><div class='col s4'>";
			$articulos .="<img src='img/home.jpg' class='responsive-img' alt=''></div>";
			$articulos .="<div class='col s8'><b class='left-align'>Direccion:</b><span class='direccion'>".$prop[Direccion]."</span><br>";
			$articulos .="<b class='left-align'>Ciudad:</b><span class='ciudad'>".$prop[Ciudad]."</span></br>";
			$articulos .="<b class='left-align'>Telefono:</b><span class='telefono'>".$prop[Telefono]."</span></br>";
			$articulos .="<b class='left-align'>Codigo Postal:</b><span class='cod_pos'>".$prop[Codigo_Postal]."</span></br>";
			$articulos .="<b class='left-align'>Tipo:</b><span class='type'>".$prop[Tipo]."</span></br>";
			$articulos .="<b class='left-align'>Precio:</b><span class='precio yellow-text text-darken-2'>".$prop[Precio]."</span></br>";
			$articulos .="</span><br></div>";
			$articulos .="</div>";
			$articulos .= "</div>";
			echo $articulos;
		}
	}

	//Si los campos ciudad y tipo estan seleccionados
}if($city != "x" and $type != "x"){
	foreach ( $propiedades as $prop ) {
    	$venta = explode("$",$prop[Precio]);
			$venta = str_replace(",","",$venta);
			//Y ciudad es igual a la propidad ciudad del JSON
		if($city == $prop[Ciudad]){
			//Y tipo es igual a la propidad tipo del JSON
			if($type == $prop[Tipo]){
				if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
          $articulos = "<div class='tituloContenido card'>";
    			$articulos .="<div class='row'><div class='col s4'>";
    			$articulos .="<img src='img/home.jpg' class='responsive-img' alt=''></div>";
    			$articulos .="<div class='col s8'><b class='left-align'>Direccion:</b><span class='direccion'>".$prop[Direccion]."</span><br>";
    			$articulos .="<b class='left-align'>Ciudad:</b><span class='ciudad'>".$prop[Ciudad]."</span></br>";
    			$articulos .="<b class='left-align'>Telefono:</b><span class='telefono'>".$prop[Telefono]."</span></br>";
    			$articulos .="<b class='left-align'>Codigo Postal:</b><span class='cod_pos'>".$prop[Codigo_Postal]."</span></br>";
    			$articulos .="<b class='left-align'>Tipo:</b><span class='type'>".$prop[Tipo]."</span></br>";
    			$articulos .="<b class='left-align'>Precio:</b><span class='precio yellow-text text-darken-2'>".$prop[Precio]."</span></br>";
    			$articulos .="</span><br></div>";
    			$articulos .="</div>";
    			$articulos .= "</div>";
    			echo $articulos;
				}
			}
		}
	}
	//Si los campos ciudad no ha sido seleccionado y tipo si lo ha sido
}else{
	if($city != "x" and $type == "x"){
			foreach ( $propiedades as $prop ) {
				$venta = explode("$",$prop[Precio]);
				$venta = str_replace(",","",$venta);
				//Y ciudad es igual a la propidad ciudad del JSON
				if($city == $prop[Ciudad]){
					//Y tipo es igual a la propidad tipo del JSON
					if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
            $articulos = "<div class='tituloContenido card'>";
      			$articulos .="<div class='row'><div class='col s4'>";
      			$articulos .="<img src='img/home.jpg' class='responsive-img' alt=''></div>";
      			$articulos .="<div class='col s8'><b class='left-align'>Direccion:</b><span class='direccion'>".$prop[Direccion]."</span><br>";
      			$articulos .="<b class='left-align'>Ciudad:</b><span class='ciudad'>".$prop[Ciudad]."</span></br>";
      			$articulos .="<b class='left-align'>Telefono:</b><span class='telefono'>".$prop[Telefono]."</span></br>";
      			$articulos .="<b class='left-align'>Codigo Postal:</b><span class='cod_pos'>".$prop[Codigo_Postal]."</span></br>";
      			$articulos .="<b class='left-align'>Tipo:</b><span class='type'>".$prop[Tipo]."</span></br>";
      			$articulos .="<b class='left-align'>Precio:</b><span class='precio yellow-text text-darken-2'>".$prop[Precio]."</span></br>";
      			$articulos .="</span><br></div>";
      			$articulos .="</div>";
      			$articulos .= "</div>";
      			echo $articulos;
					}
				}
			}

			//Inclso si el input ciudad no ha sido seleccionado pero el input tipo si lo ha sido
	}elseif($city == "x" and $type != "x"){
		foreach ( $propiedades as $prop ) {
			$venta = explode("$",$prop[Precio]);
			$venta = str_replace(",","",$venta);
			//Y ciudad es igual a la propidad ciudad del JSON
			if($type == $prop[Tipo]){
				//Y tipo es igual a la propidad tipo del JSON
				if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
          $articulos = "<div class='tituloContenido card'>";
    			$articulos .="<div class='row'><div class='col s4'>";
    			$articulos .="<img src='img/home.jpg' class='responsive-img' alt=''></div>";
    			$articulos .="<div class='col s8'><b class='left-align'>Direccion:</b><span class='direccion'>".$prop[Direccion]."</span><br>";
    			$articulos .="<b class='left-align'>Ciudad:</b><span class='ciudad'>".$prop[Ciudad]."</span></br>";
    			$articulos .="<b class='left-align'>Telefono:</b><span class='telefono'>".$prop[Telefono]."</span></br>";
    			$articulos .="<b class='left-align'>Codigo Postal:</b><span class='cod_pos'>".$prop[Codigo_Postal]."</span></br>";
    			$articulos .="<b class='left-align'>Tipo:</b><span class='type'>".$prop[Tipo]."</span></br>";
    			$articulos .="<b class='left-align'>Precio:</b><span class='precio yellow-text text-darken-2'>".$prop[Precio]."</span></br>";
    			$articulos .="</span><br></div>";
    			$articulos .="</div>";
    			$articulos .= "</div>";
    			echo $articulos;
				}
			}
		}
	}
}


?>
