//Modificar Precios dependiendo los Extras o Cantidad Seleccionada
document.addEventListener('DOMContentLoaded', function () { 
    const checkboxes = document.querySelectorAll('.INCREMENTO'); 
    const precios = document.querySelectorAll('.PRECIO'); 
    const cantidadInputs = document.querySelectorAll('.cantidad'); 
    function actualizarPrecios() { 
        precios.forEach(function (precioSpan, index) { 
            let precioBase = parseInt(precioSpan.getAttribute('data-precio-base'), 10); 
            let incrementoTotal = 0; 
            checkboxes.forEach(function (cb) { 
                if (cb.checked) { 
                    incrementoTotal += parseInt(cb.value, 10); 
                } }); 
                const cantidad = parseInt(cantidadInputs[index].value, 10); 
                const precioFinal = (precioBase + incrementoTotal) * cantidad; 
                precioSpan.textContent = precioFinal; 
            }); 
        } 
        checkboxes.forEach(function (checkbox) { 
            checkbox.addEventListener('change', actualizarPrecios); 
        }); 
        cantidadInputs.forEach(function (input) { 
            input.addEventListener('input', actualizarPrecios); 
        });
     });