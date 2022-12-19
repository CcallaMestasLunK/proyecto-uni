<?php  
class Controller{
    public function controladorDePlantilla(){
        if(isset($_GET["plantilla"])){
           $plantilla = $_GET["plantilla"];          
        }else{
           $plantilla ="inicio"; 
        }
        return include($plantilla.".php");
    } 
}

