
let elFormulari = document.getElementById("elForm");
elFormulari.addEventListener("submit", function (event) { //FUNCIÓ sense nom. Noms elements PREDETERMINATS. Salta al clicar Submit
  event.preventDefault();

  // VARIABLES per VALIDACIONS FORMULARI: /////// -------------------------------------------------------------------------------
  let resultat = true;  // true ACCEPTA QUE D'ENTRADA TOT ESTÀ BÉ o ÉS VALID //

  let nomEnquesta = document.getElementById("nom_enquesta").value.trim(); // NOM ENQUESTA //---------
  let avisNomEnquesta = document.getElementById("avis_nom_enquesta");

  let opcio1 = document.getElementById("opcio_1").value.trim(); // OPCIÓ 1 //---------
  let avisOpcio1 = document.getElementById("avis_opcio_1");

  let opcio2 = document.getElementById("opcio_2").value.trim(); // OPCIÓ 2 //---------
  let avisOpcio2 = document.getElementById("avis_opcio_2");

  // CONDICIONS VALIDACIONS: //////// --------------------------------------------------------------------
  if (nomEnquesta.length == "") { // NOM ENQUESTA Obligatori // -------------------	
    avisNomEnquesta.innerHTML = "El nom de l'enquesta és obligatori!"
    resultat = false
  }
  else {
    avisNomEnquesta.innerHTML = "";
  }

  if (opcio1.length == "") { // OPCIÓ 1 Obligatori // -------------------	
    avisOpcio1.innerHTML = "l'Opció 1 és obligatoria!"
    resultat = false
  }
  else {
    avisNomEnquesta.innerHTML = "";
  }

  if (opcio2.length == "") { // OPCIÓ 2 Obligatori // -------------------	
    avisOpcio2.innerHTML = "l'Opció 2 és obligatoria!"
    resultat = false
  }
  else {
    avisNomEnquesta.innerHTML = "";
  }

  // ENVIO  //////// -----------------------------------------------------------------------------
  if(resultat) {
    // REDIRIGUEIXO A ON TOQUI
   // window.location = "./enquesta_rebuda.html"
  }
  return resultat; 
})

// MOSTRAR OCULTAR Input Formulari: ---------------------
function mostrarCampo() {
  var campo = document.getElementById('campoOculto');
  campo.style.display = 'block'; 
} 

// MOSTRAR DADES D'ENQUESTA CREADA: ---------------------------------------------

function afegirFila() {

  // Obtenir la referència a la taula i al tbody
  let taula = document.getElementById("taula").getElementsByTagName('tbody')[0];

  // Obtenir els valors dels camps d'entrada
  let nomEnquesta = document.getElementById("nom_enquesta").value; // NOM ENQUESTA
  let opcio1 = document.getElementById("opcio_1").value;
  let opcio2 = document.getElementById("opcio_2").value;

  // Crear una nova fila y celdes
  let novaFila = taula.insertRow();
  let celdaEnquesta = novaFila.insertCell(0);
  let celdaOpcio1 = novaFila.insertCell(1);
  let celdaOpcio2 = novaFila.insertCell(2);
  let celdaAccio = novaFila.insertCell(3); // Acció de Borrar
  let celdaAccioEnviar = novaFila.insertCell(4); // Acció d'Enviar

  // Asignar valors a les celdes
  celdaEnquesta.innerHTML = nomEnquesta;
  celdaOpcio1.innerHTML = '<button onclick="mostrarOpcio1(this)" class="boto_taula"> '+opcio1+' </button>'; // BOTÓ PER ESCOLLIR OPCIÓ"
  celdaOpcio2.innerHTML = '<button onclick="mostrarOpcio2(this)" class="boto_taula"> '+opcio2+' </button>'; // BOTÓ PER ESCOLLIR OPCIÓ"
  celdaAccio.innerHTML = '<button onclick="borrarFila(this)" class="boto_mes_opcions"> X </button>'; // BOTÓ PER BORRAR "X" 
  celdaAccioEnviar.innerHTML = '<button onclick="enviarResultat(this)" class="boto_taula">Enviar >> </button>'; // BOTÓ PER ENVIAR A PÀGINA RESULTAT <<< PENDENT!!

  // Netejar els camps d'entrada
  document.getElementById("nom_enquesta").value = '';
  document.getElementById("opcio_1").value = '';
  document.getElementById("opcio_2").value = '';
}

// FUNCIÓ PER BORRAR Fila
function borrarFila(boto) {
  // Obtenir la fila a la que pertany el botó
  let fila = boto.parentNode.parentNode;
  // Obtenir la referència a la taula
  let taula = document.getElementById("taula").getElementsByTagName('tbody')[0];
  // Eliminar la fila
  taula.deleteRow(fila.rowIndex - 1);
} 

// COMPTADOR-VALIDADOR DE CARACTERS: ---------------------------------------------------------

let contingutInput = ""
let maximCaracters = 25

function controlaLongitud(){ // Comptador OPCIÓ 1 ------
  numeroCaracters = document.forms[0].opcio_1.value.length 
  console.log(contingutInput)
  if (numeroCaracters > maximCaracters) {
      document.forms[0].opcio_1.value = contingutInput
  }else{
      contingutInput = document.forms[0].opcio_1.value
  }

  if (numeroCaracters >= maximCaracters){
      document.forms[0].caracters.style.color="#ff0000";
  }else{
      document.forms[0].caracters.style.color="#000000";
  }
  comptador()
}

function comptador(){
  document.forms[0].caracters.value=document.forms[0].opcio_1.value.length
}

function controlaLongitudOpcio2(){ // Comptador OPCIÓ 2 ------
  numeroCaracters = document.forms[0].opcio_2.value.length 
  console.log(contingutInput)
  if (numeroCaracters > maximCaracters) {
      document.forms[0].opcio_2.value = contingutInput
  }else{
      contingutInput = document.forms[0].opcio_2.value
  }

  if (numeroCaracters >= maximCaracters){
      document.forms[0].caracters_op2.style.color="#ff0000";
  }else{
      document.forms[0].caracters_op2.style.color="#000000";
  }
  comptadorOpcio2()
}

function comptadorOpcio2(){
  document.forms[0].caracters_op2.value=document.forms[0].opcio_2.value.length
}