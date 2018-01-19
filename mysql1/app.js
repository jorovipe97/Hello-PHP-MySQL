function show_update_input(id_str) {
  var data = id_str.split("-");
  // Si la pertenece a la columna ID
  if (data[1] == "id") {
    return; // Entonces no hagas nada
  }

  var elem = document.getElementById(id_str); // Seleccino la celda HTML actual
  var cell_val = elem.innerHTML; // Guardo su valor en una variable
  elem.innerHTML = ""; // Borro el texto que habia en dicha celda

  // Set the cell-cordinate to the submit form button
  var send_btn = document.getElementById("subbtn");
  var cell_coord = data[1]+","+data[2];
  send_btn.setAttribute("value", cell_coord);
  //console.log(cell_coord);

/*
  var input_type = "";
  switch (data[1]) {
    case "expression":

      break;
    default:

  }*/

  // SOLO PUEDO MODIFICAR DE A UNA CELDA
  // TO-DO: Implementar que solo se pueda modificar una celda
  // TO-DO: Cambiar el tipo de input dependiendo de la columna de la celda
  // TO-DO: Pasar por POST a. el nombre de la columna b. la id de la fila c. el nuevo valor

  // Creo un input donde podre poner el nuevo valor que deseo.
  var id_input = id_str + "-input"; // Creamo una id para el input
  var update_input = document.createElement("input");
  // Agrega attributos al input
  update_input.setAttribute("form", "update_form"); // Este input pertenece al formulario de update
  update_input.setAttribute("id", id_input);
  update_input.setAttribute("name", "update");
  update_input.setAttribute("class", "total-width");
  update_input.setAttribute("value", cell_val);
  update_input.setAttribute("onblur", "hide_update_input(\'" + id_input + "\', \'" + cell_val + "\')");


  // Antes de agregar el input al td el elemento solo existe en memoria y no en el DOM
  elem.appendChild(update_input); // Agregamos el input a la celda actual.
  update_input.focus(); // Enfoca el input recien creado

  console.log("Double clicked " + id_str + " " + cell_val);
  console.log(data);
}

function hide_update_input(input_id, original_cell_val) {
  var data = input_id.split("-");
  data.pop();
  var td_id = data.join("-");

  var td_elem = document.getElementById(td_id);
  var update_input = document.getElementById(input_id);
  var cell_val = update_input.getAttribute("value");

  // Un-Set the cell-cordinate to the submit form button
  var send_btn = document.getElementById("subbtn");
  var cell_coord = "-1";
  send_btn.setAttribute("value", cell_coord);

  // Revisar si se ha cambiado el valor en el input respecto al valor original
  // que fue original mente obtenido de la base de datos
  /*console.log(cell_val, ' ', original_cell_val);
  if (cell_val === original_cell_val)
  {
    console.log("La celda no cambio de valor");
  }
  else
  {
    console.log("La celda si cambio de fucking valor jeeje");
  }*/

  if (td_elem.hasChildNodes()) {
    td_elem.removeChild(td_elem.childNodes[0]);
  }
  td_elem.innerHTML = cell_val;
}

function setCellInfo(form_id) {
  var form = document.getElementById(form_id);
  // Si el formulario tiene elementos
  if (form.hasChildNodes()) {
    var send_btn = form.childNodes[0];
  }
  console.log(input);
}
