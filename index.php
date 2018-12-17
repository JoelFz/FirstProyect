<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Transaccion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />

    </head>
    <body>
        <div class="container">
            <p class="text-center display-3">Inserciones a la BBDD</p><hr>
            <div class="row">
                <div class="col">
                    <div class="card mt-4" style="width: 20rem;">
                        <h5 class="card-header bg-success">Usuarios</h5>
                        <form class="m-3" action="user.php" method="POST">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Id:</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="id" placeholder="Ingrese el id..." required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Usuario:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="user" placeholder="Ingrese el usuario..." required="">
                            </div>
                            <button class="btn btn-primary btn-block">Guardar</button>
                        </form>

                    </div>
                </div> <!-----Formualario juegousuario---------------->
                <div class="col">
                    <div class="card mt-4" style="width: 20rem;">
                        <h5 class="card-header bg-info">Juego-Usuario</h5>
                        <form class="m-3" action="juegousuario.php" method="POST">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Id-Usuario:</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="id1" placeholder="Id..." required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Id-Juego:</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" name="id2" placeholder="Id..." required="">
                            </div>
                            <button class="btn btn-primary btn-block">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>




        </div>   

    </body>
</html>