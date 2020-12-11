<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Informacion de pago</title>
  </head>
  <body>
  <div class="container">
  <div class="row align-items-start">
  <h1>Informacion de Pago</h1>
    
    <div class="col">
                <form action="pago.php" method="post">
                            Tipo: <select name="companyType" class="form-select" aria-label="Default select example">
                                            <option value="">Seleccionar una opcion</option>
                                            <option value="Persona Natural">Persona Natural</option>
                                            <option value="Empresa">Empresa</option>
                                    </select>
                            Cedula: <input class="form-control" type="text"  name="document"><br>
                            Tipo Documento: <select name="documentType" class="form-select" aria-label="Default select example">
                                            <option value="">Seleccionar una opcion</option>
                                            <option value="01">Cédula de identidad</option>
                                            <option value="02">RUC, Pasaporte</option>
                                            <option value="03">PID del exterior</option>
                            </select>
                            </div>
                            <div class="col">
                            Nombres: <input class="form-control" type="text" name="fullName"><br>
                            Direccion: <input class="form-control" type="text" name="address"><br>
                            Celular: <input class="form-control" type="text" name="mobile"><br>
                            Email: <input class="form-control" type="email" name="email"><br>
                            Descripcion: <input class="form-control" type="text" name="description"><br>
                            </div>
                            <div class="col">
                            Tipo De Pago: <select name="gateway" class="form-select" aria-label="Default select example">
                                            <option value="">Seleccionar una opcion</option>
                                            <option value="1">Alignet</option>
                                            <option value="2">Payphone</option>
                                            <option value="3">Datafast</option>
                                            <option value="4">Paymentez</option>
                                            
                            <input class="btn btn-success mt-2" type="submit" value="Enviar">
                </form>
    </div>
   
  </div>
  </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
