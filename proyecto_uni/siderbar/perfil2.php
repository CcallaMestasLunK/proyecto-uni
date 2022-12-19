<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-xl px-4 mt-4">
     <nav class="nav nav-borders">
         <a class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">FOTO DE PERFIL</div>
                        <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <div class="small font-italic text-muted mb-4">docente</div>
                        <button class="btn btn-primary" type="button">Subir imagen </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header">DATOS &nbsp; PERSONALES</div>
                        <div class="card-body">
                        <?php
                        include("conection.php");
                        $consulta = "select * from docente";
                        $resul= mysqli_query($conection, $consulta );
                        ?>
                        <form>
                          <?php while($datos=mysqli_fetch_assoc($resul)){  ?>
                                 <div class="mb-3">
                                      <label class="small mb-1" for="inputUsername">DESCRIPCION</label>
                                      <p class="text-dark bg-white p-2 rounded"><?php echo $datos['descripcion']?></p> 
                                      <!-- <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="escribe..."> -->
                                  </div>
                                  <div class="row gx-3 mb-3">
                                    <div class="col-md-6"> 
                                        <label class="small mb-1" for="inputFirstName">OCUPACION</label> 
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="escribe...">
                                    </div>
                                    <div class="col-md-6"> 
                                        <label class="small mb-1" for="inputLastName">DEPARTAMENTO ACADEMICO</label>
                                         <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="escribe...">
                                    </div>
                                  <div class="row gx-3 mb-3">
                                    <div class="col-md-6"> 
                                        <label class="small mb-1" for="inputFirstName">NOMBRE</label> 
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="escribe...">
                                    </div>
                                    <div class="col-md-6"> 
                                        <label class="small mb-1" for="inputLastName">APELLIDOS</label>
                                         <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="escribe...">
                                    </div>
                                    <br>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                         <label class="small mb-1" for="inputOrgName">DIRECCION</label> 
                                         <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="escribe...">
                                        </div>
                                    <div class="col-md-6"> 
                                        <label class="small mb-1" for="inputLocation">TELEFONO</label>
                                        <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="escribe...">
                                    </div>
                                </div>
                                <div class="mb-3"> 
                                    <label class="small mb-1" for="inputEmailAddress">EMAIL</label>
                                     <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="escribe...">
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6"> 
                                            <label class="small mb-1" for="inputPhone">SEXO</label> 
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="escribe...">
                                        </div>
                                        <div class="col-md-6"> 
                                            <label class="small mb-1" for="inputBirthday">FECHA DE NACIMIENTO</label> 
                                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="escribe...">
                                        </div>
                                    </div>
                                    <div class="container text-center">
                                        <div class="row">
                                          <div class="col">
                                            <input type="submit" class="btn btn-primary " value="actualizar " >
                                          </div>
                                          <div class="col">
                                            <input type="submit" class="btn btn-primary " value="editar">
                                          </div>
                                        </div>
                                    </div> 
                                </div>                             
                                <?php} ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>