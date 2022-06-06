<body>
    <div class="container text-center py-5">
        <h1 id="titulo" class="display-3 py-5">En Linea</h1>
        <button id="boton" class="btn btn-danger">Cambiar Estado</button>
      </div>
  <script>
    function cambiar() {
      document.getElementById("titulo").innerHTML = "Ausente";
    }
    document.getElementById("boton").onclick = function () {
      cambiar();
    };
  </script>
</body>
