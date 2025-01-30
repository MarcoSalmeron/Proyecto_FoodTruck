//Boton en Header de Bienvenida que dirige al Login
let btn_login = document.getElementById("top-btn-login");
btn_login.addEventListener('click', () => {
    Swal.fire({
        title: '¡Cuidado!',
        text: 'Solo personal autorizado puede entrar y estarás saliendo de la página principal.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', // Rojo
        cancelButtonColor: '#28a745', // Verde
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Regresar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'Login.php'; // Redirigir a un archivo PHP
        }
    });
});


