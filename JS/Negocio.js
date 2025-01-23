document.addEventListener('DOMContentLoaded', function() {
  // Recuperar el estado del botón desde localStorage
  let estadoBoton = localStorage.getItem('estadoBoton');

  // Establecer el estado del botón según el valor guardado
  if (estadoBoton === 'CERRADO') {
    document.querySelector('.Actividad').textContent = 'CERRADO';
    document.querySelector('.Actividad.bi.bi-record-circle').setAttribute('fill', 'red');
    $('.btn-agregar').attr('disabled', true);
  } else if (estadoBoton === 'ABIERTO') {
    document.querySelector('.Actividad').textContent = 'ABIERTO';
    document.querySelector('.Actividad.bi.bi-record-circle').setAttribute('fill', 'green');
    $('.btn-agregar').attr('disabled', false);
  }

  // Agregar eventos de clic a los botones
  document.getElementById('Cerrar').addEventListener('click', function() {
    document.querySelector('.Actividad').textContent = 'CERRADO';
    document.querySelector('.Actividad.bi.bi-record-circle').setAttribute('fill', 'red');
    localStorage.setItem('estadoBoton', 'CERRADO');
    $('.btn-agregar').attr('disabled', true); // Desactivar botones
  });

  document.getElementById('Abrir').addEventListener('click', function() {
    document.querySelector('.Actividad').textContent = 'ABIERTO';
    document.querySelector('.Actividad.bi.bi-record-circle').setAttribute('fill', 'green');
    localStorage.setItem('estadoBoton', 'ABIERTO');
    $('.btn-agregar').attr('disabled', false); // Activar botones
  });
});



