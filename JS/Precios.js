
document.addEventListener('DOMContentLoaded', function () {
    const precioExtra = 10; // Precio por cada extra
    const precios = document.querySelectorAll('.PRECIO');
    const cantidadInputs = document.querySelectorAll('.cantidad');

    function actualizarTotal() {
        let totalPrecio = 0;
        document.querySelectorAll('.numero').forEach(num => {
            totalPrecio += parseInt(num.textContent) * precioExtra;
        });
        return totalPrecio; // Retorna el valor de totalPrecio
    }

    function actualizarPrecios() {
        precios.forEach(function (precioSpan) {
            let precioBase = parseInt(precioSpan.getAttribute('data-precio-base'), 10);
            let incrementoTotal = 0;
            let cantidad = 1; // Valor por defecto si no hay inputs de cantidad
            cantidadInputs.forEach(function (input) {
                cantidad *= parseInt(input.value, 10); // Multiplica todas las cantidades
            });
            // Agregar el total de los complementos
            let totalComplementos = actualizarTotal();
            // MUESTRA LO QUE TRAE LA FUNCION actualizarTotal()
            console.log("El total del precio es: " + totalComplementos);
            let precioFinal = (precioBase + incrementoTotal) * cantidad + totalComplementos;
            precioSpan.textContent = precioFinal.toFixed(2);
        });
    }

    cantidadInputs.forEach(function (input) {
        input.addEventListener('input', actualizarPrecios);
    });

    // Llamar a la función para inicializar los precios al cargar la página
    actualizarPrecios();

    // Contador de extras
    document.querySelectorAll('.contador').forEach(contador => {
        const decrementButton = contador.querySelector('.decrementar');
        const incrementButton = contador.querySelector('.incrementar');
        const numero = contador.querySelector('.numero');

        decrementButton.addEventListener('click', () => {
            let value = parseInt(numero.textContent);
            if (value > 0) {
                numero.textContent = (value - 1).toString();
                actualizarPrecios();
            }
        });

        incrementButton.addEventListener('click', () => {
            let value = parseInt(numero.textContent);
            if (value >= 0 && value < 10) {
                numero.textContent = (value + 1).toString();
                actualizarPrecios();
            } else if (value >= 10) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "La cantidad máxima de extras es 10!",
                    footer: '---------------------------------'
                });
            }
        });
    });
});