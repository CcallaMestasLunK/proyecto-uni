<?php
class HomeModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function registrar($evento, $fecha, $color)
    {
        $sql ="INSERT INTO eventos (title, inicio , color) values (?,?,?)";
        $array = array($evento, $fecha , $color);
        $data = $this->save($sql, $array);
        if($data == 1){
            $msg = 1;
         }else{
            $msg = 0;
         }
         return $msg;
    }
}

?>