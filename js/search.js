function searcher(e){
  e.preventDefault()
  var Ciudad = $("#selectCiudad").val();
  var Tipo = $("#selectTipo").val();
  var Precio = $("#rangoPrecio").val();
  $.ajax({
    url: './search.php',
    type: 'post',
    data:{Ciudad:Ciudad, Tipo: Tipo, Precio: Precio},
  }).done(function(data){
    $(".itemMostrado").remove();
    $(".colContenido").append(data);
  })
}

$(document).ready(function(){
  $('select').material_select();
	$("#formulario").submit(function(event){
		var ciudad = $("#selectCiudad").val();
		var Tipo = $("#selectTipo").val();
		var Precio = $("#rangoPrecio").val();
		event.preventDefault();
		$.ajax({
			url:"./search.php",
			type:"POST",
      dataType:'text',
			data:{ciudad:ciudad, Tipo: Tipo, Precio: Precio}
		}).done(function(data){
			$(".colContenido").empty();
      $('.colContenido').append('<div class="tituloContenido card"><h5>Resultados de la búsqueda:</h5><div class="divider"></div><button type="button" name="todos" class="btn-flat waves-effect" id="mostrarTodos">Mostrar Todos</button></div>')
			$(".colContenido").append(data);
		})
	})
})
