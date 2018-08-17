document.getElementById("enviar").onclick = function(){
  clear()
}
function clear(){
  document.getElementsByName("nombre").value("");
  document.getElementsByName("empresa").value("");
  document.getElementsByName("correo").value("");
  document.getElementsByName("telefono").value("");
  document.getElementsByName("Descripción").value("");
}
