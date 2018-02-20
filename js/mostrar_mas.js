function setAll(){
  $.ajax({
    url: './mostrar_mas.php',
    type: 'post',
    contentType: false,
    processData: false,
    cache:false,
    dataType:'json',
    success: function(response){
      for(i in response){
        $('#contenedor').append("<div class='tituloContenido card'><div class='row'><div class='col s4'><img src='img/home.jpg' class='responsive-img' alt=''></div><div class='col s8'><b class='left-align'>Direccion:</b><span class='direccion'>"+response[i].Direccion+"</span><br><b class='left-align'>Ciudad:</b><span class='ciudad'>"+response[i].Ciudad+"</span><br><b class='left-align'>Telefono:</b><span class='telefono'>"+response[i].Telefono+"</span><br><b class='left-align'>Codigo Postal:</b><span class='cod_pos'>"+response[i].Codigo_Postal+"</span><br><b class='left-align'>Tipo:</b><span class='type'>"+response[i].Tipo+"</span><br><b class='left-align'>Precio:</b><span class='precio yellow-text text-darken-2'>"+response[i].Precio+"</span><br></div></div></div>");
        $('#mostrarTodos').addClass('btn disabled');
      }
      $(".colContenido").empty();
      $(".colContenido").append(data);
    },
    error: function(){
      alert('Error en peticion Ajax.')
    }
  })
}

(function(){
  $('#mostrarTodos').on('click',setAll);
})()

/*$('#contenedor').append("<div class='tituloContenido card'><div class='row'><div class='col s4'><img src='img/home.jpg' class='responsive-img' alt='></div><div class='col s8'><b class='left-align'>Direccion:</b><span class='direccion'>"+data.direccion+"</span><br><b class='left-align'>Ciudad:</b><span class='ciudad'>"+data.ciudad+"</span><br><b class='left-align'>Telefono:</b><span class='telefono'>"+data.telefono+"</span><br><b class='left-align'>Codigo Postal:</b><span class='cod_pos'>"+data.cod_pos+"</span><br><b class='left-align'>Tipo:</b><span class='type'>"+data.tipo+"</span><br><b class='left-align'>Precio:</b><span class='precio yellow-text text-darken-2'>"+data.precio+"</span><br></div></div></div>")*/
