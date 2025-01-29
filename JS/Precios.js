document.addEventListener('DOMContentLoaded', function () { 
    const checkboxes = document.querySelectorAll('.INCREMENTO'); 
    const precios = document.querySelectorAll('.PRECIO'); 
    const cantidadInputs = document.querySelectorAll('.cantidad'); 

    function actualizarPrecios() { 
        precios.forEach(function (precioSpan) { 
            let precioBase = parseInt(precioSpan.getAttribute('data-precio-base'), 10); 
            let incrementoTotal = 0; 
            checkboxes.forEach(function (cb) { 
                if (cb.checked) { 
                    incrementoTotal += 10; // Incremento fijo de 10 MXN
                } 
            }); 
            let cantidad = 1; // Valor por defecto si no hay inputs de cantidad
            cantidadInputs.forEach(function (input) {
                cantidad *= parseInt(input.value, 10); // Multiplica todas las cantidades
            });
            let precioFinal = (precioBase + incrementoTotal) * cantidad; 
            precioSpan.textContent = precioFinal; 
        }); 
    } 

    checkboxes.forEach(function (checkbox) { 
        checkbox.addEventListener('change', actualizarPrecios); 
    }); 

    cantidadInputs.forEach(function (input) { 
        input.addEventListener('input', actualizarPrecios); 
    });

    // Llamar a la función para inicializar los precios al cargar la página
    actualizarPrecios();
});
 