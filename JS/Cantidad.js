	// Verificar Cantidad en Modal
    $('.btn-agregar').on('click', function() {
        let cantidad = $(this).closest('.modal').find('.cantidad').val();
        let cantidadValida = true;
      
        if (cantidad === '' || cantidad < 1 || cantidad > 10) {
          cantidadValida = false;
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Debes Escoger una Cantidad del 1 al 10!"
          });
        }
      
        if (cantidadValida) {
          $(this).closest('.modal').find('.PRECIO').text(precioTotal);
      
          // Aquí agregar la lógica para agregar el producto al carrito
          alert('Producto agregado correctamente.');
        }
    });
      
    
