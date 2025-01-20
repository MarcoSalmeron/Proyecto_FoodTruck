//Verificar Input de Modales
document.addEventListener('DOMContentLoaded', function () { 
	const AgregarBtn = document.getElementById('Agregar-Cambios'); 
	AgregarBtn.addEventListener('click', function () { 
		const checkboxes = document.querySelectorAll('#Ingredientes .form-check-input-proteina'); 
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
                    //Verificar Cantidad en Modal
                    AgregarBtn.addEventListener('click', function(event) {
                    const cantidad = document.getElementById('cantidad').value;
                    if (cantidad < 1 || cantidad > 10) {
                        event.preventDefault(); 
						Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "Debes Escoger una Cantidad del 1 al 10!"
						  }); 
                        }
                    else{
                        // Aquí agregar la lógica para guardar los cambios 
				        alert('Cambios guardados correctamente.');
                        } 
                    });
				} 
	});
});
