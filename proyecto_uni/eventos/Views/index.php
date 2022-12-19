<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
    <link href="./Assets/css/main.min.css" rel="stylesheet">
    <title>calendario de eventos</title>
  </head>
  <body>
    <h1>calendario</h1>
<!--calendario-->
    <div class="container">
        <div id='calendar'></div>
    </div>
    
 <!--modal-->
   <div class="modal fade" id="myevento" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mymodal" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header bg-info">
           <h5 class="modal-title" id="titulo"></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
           </button>
         </div>

<!--formulario-modal-->
        <form id="formulario">
        <div class="modal-body"><!--de boot form--->
            <div class="form-floating mb-3"><!--de boot clase--->
            <input type="text" class="form-control" id="title" name="title">
            <label for="title" class="form-label">evento</label>
            </div>

            <div class="form-floating mb-3">
            <input type="date" class="form-control" id="inicio" name="inicio">
            <label for="inicio" class="form-label">fecha</label>
            </div>

           <!--cambiar a opciones-->
            <div class="form-floating mb-3">
            <input type="color" class="for|m-control" id="color" name="color">
            <label for="color" class="form-label">color</label>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-warning">cancelar</button>
            <button class="btn btn-danger">eliminar</button>
            <button class="btn btn-info" id="btnAccion" type="submit" >registrar</button>           
        </div>
        </form>
          
       </div>
     </div>
   </div>
   




   
 <!-- Bootstrap js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./Assets/js/main.min.js"></script>
    <script src="./Assets/js/moment.js"></script>
    <script src="./Assets/js/sweetalert2.all.min.js"></script>
    <script src="./Assets/js/es.js"></script>
    <script src="./Assets/js/app.js"></script>

    
  </body>
</html>