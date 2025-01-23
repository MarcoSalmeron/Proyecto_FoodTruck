// Verificar Check-Box al hacer click en Agregar, SOLO SI TIENEN PROTEINAS SELECCIONABLES!
document.addEventListener('DOMContentLoaded', function () {
	let agregarBtns = document.getElementsByClassName('PROD');
  
	for (let i = 0; i < agregarBtns.length; i++) {
	  agregarBtns[i].addEventListener('click', function () {
		let checkedCheckboxes = document.querySelectorAll('#Ingredientes .form-check-input-proteina:checked');
  
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
		} 
		
	  });
	}
  
	//Reiniciar Valores al cerrar cualquier modal
	$('.modal').on('hidden.bs.modal', function() {
		$(this).find('input[type="checkbox"]').prop('checked', false);
		$(this).find('.form-comment-input').val('');
		$(this).find('.cantidad').val(1);
		$(this).find('.PRECIO').text($(this).find('.PRECIO').data('precio-base'));

	  });

	//Al Abrir modal Mostrar Precio Base
	$('.modal').on('shown.bs.modal', function() {
		$(this).find('.PRECIO').text($(this).find('.PRECIO').data('precio-base'));
		$(this).find('.PRECIO-PAPAS').text($(this).find('#tamaño-papas option:selected').data('precio-base'));

	  });	  
	  
});
	