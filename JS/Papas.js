$(document).ready(function() {
    // Modificar Precio dependiendo la seleccion de papas
    let selectTamaño = $('#tamaño-papas');
    let precioSpan_papas = $('.PRECIO-PAPAS');
    let cantidadInput_papas = $('#cantidad-papas');
  
    function actualizarPrecio_papas() {
      let precioSeleccionado = parseInt(selectTamaño.find('option:selected').attr('data-precio-base'), 10);
      let cantidad_papas = parseInt(cantidadInput_papas.val(), 10);
      let precioFinal_papas = precioSeleccionado * cantidad_papas;
      precioSpan_papas.text(precioFinal_papas);
    }
  
    selectTamaño.on('change', actualizarPrecio_papas);
    cantidadInput_papas.on('input', actualizarPrecio_papas);
  });
  
  