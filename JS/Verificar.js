// Verificar Check-Box al hacer click en Agregar
document.addEventListener('DOMContentLoaded', function () {
	const agregarBtns = document.getElementsByClassName('btn-agregar');
  
	for (let i = 0; i < agregarBtns.length; i++) {
	  agregarBtns[i].addEventListener('click', function () {
		const checkedCheckboxes = document.querySelectorAll('#Ingredientes .form-check-input-proteina:checked');
  
		if (checkedCheckboxes.length === 0) {
		  Swal.fire({
			icon: "error",
			title: "Oops...",
			text: "Debes Escoger Minimo 1 Proteina!"
		  });
		} else if (checkedCheckboxes.length > 2) {
		  Swal.fire({
			icon: "error",
			title: "Oops...",
			text: "Maximo 2 Proteinas por Orden!"
		  });
		} else {
		  // Verificar Cantidad en Modal
		  const cantidades = document.getElementsByClassName('cantidad');
		  let cantidadValida = true;
  
		  for (let i = 0; i < cantidades.length; i++) {
			const cantidad = parseInt(cantidades[i].value, 10);
  
			if (cantidad < 1 || cantidad > 10) {
			  cantidadValida = false;
			  Swal.fire({
				icon: "error",
				title: "Oops...",
				text: "Debes Escoger una Cantidad del 1 al 10!"
			  });
			  break;
			}
		  }
  
		  if (cantidadValida) {
			// Aquí agregar la lógica para guardar los cambios
			alert('Cambios guardados correctamente.');
		  }
		}
	  });
	}
  
	// Evento para desmarcar los checkboxes y reiniciar el input number y comentarios al cerrar cualquier modal
	$('.modal').on('hidden.bs.modal', function () {
	  const checkboxes = $(this).find('input[type="checkbox"]');
	  checkboxes.prop('checked', false);
  
	  const cantidades = $(this).find('.cantidad');
	  cantidades.val(1);

	  const coments = $(this).find('.form-comment-input');
	  coments.val('');

	  const precioSpan = $(this).find('.PRECIO');
	  const precioBase = precioSpan.data('precio-base');
	  precioSpan.text(precioBase);
	});
  });