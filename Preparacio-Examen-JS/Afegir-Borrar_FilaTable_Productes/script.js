function afegirFila() {

    // Obtenir la referència a la taula i al tbody
    let taula = document.getElementById("taula").getElementsByTagName('tbody')[0];

    // Obtenir els valors dels camps d'entrada
    let foto = document.getElementById("foto").value; // FOTO Pendent .. <<<<
    let nomProducte = document.getElementById("nom_producte").value;
    let preu = document.getElementById("preu").value;

    // Crear una nova fila y celdes
    let novaFila = taula.insertRow();
    let celdaFoto = novaFila.insertCell(0);
    let celdaNom = novaFila.insertCell(1);
    let celdaPreu = novaFila.insertCell(2);
    let celdaAccio = novaFila.insertCell(3);

    // Asignar valors a les celdes
    celdaFoto.innerHTML = foto;
    celdaNom.innerHTML = nomProducte;
    celdaPreu.innerHTML = preu;
    celdaAccio.innerHTML = '<button onclick="borrarFila(this)">Borrar</button>';

    // Netejar els camps d'entrada
    document.getElementById("foto").value = '';
    document.getElementById("nom_producte").value = '';
    document.getElementById("preu").value = '';
}

function borrarFila(boto) {
    // Obtenir la fila a la que pertany el botó
    let fila = boto.parentNode.parentNode;

    // Obtenir la referència a la taula
    let taula = document.getElementById("taula").getElementsByTagName('tbody')[0];
    // Eliminar la fila
    taula.deleteRow(fila.rowIndex - 1);
}
