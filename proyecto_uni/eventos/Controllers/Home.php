<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView($this, 'index');
    }
    // metodo
    public function registrar()
    {
        if (empty($_post['title'])|| empty($_post['inicio']) || empty($_post['color']))
             $mensaje = array('msg' => 'todos los campos son requeridos', 'estado' => false, 'tipo' => 'warming'); 
        }
}
