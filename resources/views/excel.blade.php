<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exportar a Excel</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6 mt-5">
          <div class="p-5 border-2 border bg-info border-secondary rounded">
            <h2>Usuarios:</h2>
            <form method="POST" enctype="multipart/form-data" action="{{ route('import-user') }}">
              @csrf
              <label class="bg-light text-danger"><b>Seleccione el archivo a importar</b></label>
              <br><br>
              <input type="file" name="file" class="form-control">
              <div class="mt-5">
                <button type="submit" class="btn btn-warning"><b>Importar Archivo</b></button>
                <a href="{{ route("export-user") }}" class="btn btn-primary float-right"><b>Exportar a Excel</b></a>
                <br><br>
                <a href="{{ route("index") }}" class="btn btn-success float-right"><b>Lista de Usuarios</b></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>