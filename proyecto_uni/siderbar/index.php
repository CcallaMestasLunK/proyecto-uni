<?php   require("Controller.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="perfil.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script> 
    <!----CSS -->
    <link rel="stylesheet" href="style.css">

    <!----Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title> Sidebar Menu</title>
</head>

<body>
    <div class="navegador">
        <?php include("menu.php");?>
    </div>

    <div id="contenedor" class="prub">
        <?php      
         $modulos=new Controller;
         $modulos->controladorDePlantilla();
        ?>
    </div>











    
    <script>
    const contenedor = document.getElementById('contenedor');

    function abrirSideBar() {
        contenedor.classList.toggle("abrir");
    }
    </script>
</body>

</html>