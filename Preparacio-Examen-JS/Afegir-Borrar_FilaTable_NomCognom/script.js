function añadirFila() {
    // Obtener la referencia a la tabla y al tbody
    var tabla = document.getElementById("miTabla").getElementsByTagName('tbody')[0];

    // Obtener los valores de los campos de entrada
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;

    // Crear una nueva fila y celdas
    var nuevaFila = tabla.insertRow();
    var celdaNombre = nuevaFila.insertCell(0);
    var celdaApellido = nuevaFila.insertCell(1);
    var celdaAccion = nuevaFila.insertCell(2);

    // Asignar valores a las celdas
    celdaNombre.innerHTML = nombre;
    celdaApellido.innerHTML = apellido;
    celdaAccion.innerHTML = '<button onclick="borrarFila(this)">Borrar</button>';

    // Limpiar los campos de entrada
    document.getElementById("nombre").value = '';
    document.getElementById("apellido").value = '';
}

function borrarFila(boton) {
    // Obtener la fila a la que pertenece el botón
    var fila = boton.parentNode.parentNode;
    // Obtener la referencia a la tabla
    var tabla = document.getElementById("miTabla").getElementsByTagName('tbody')[0];
    // Eliminar la fila
    tabla.deleteRow(fila.rowIndex - 1);
}