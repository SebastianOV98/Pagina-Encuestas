function Validar() {
  var nombre, correo, contraseña;
  nombre = document.getElementById("exampleInputEmail1").value;
  correo = document.getElementById("exampleInputPassword1").value;
  contraseña = document.getElementById("exampleInputPassword2").value;

  if (nombre == "" || correo == "" || contraseña == "") {
    alert("Todos los campos son obligatorios");
    return false;
  } else if (contraseña.length < 8) {
    alert("La clave es muy corta");
    return false;
  }
}
