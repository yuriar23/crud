<?php
class HomeModel extends Query{
    public function __construct() {
        parent::__construct();
    }

    public function getalumno($status){
        /* $sql="";
        return $this->selectAll(); */
    }

    public function registrar(){
        /* $sql = "INSERT INTO alumnos () VALUES ()";
        $array = array();
        return $this->insertar(); */
    }

    public function actualizar() {
       /*  $sql = "UPDATE  alumnos  SET  WHERE id = ?";
    
        $array = array();
        return $this->save($sql, $array); */
    }


    //trar la informacio al formulario
    public function editar($idalumno)
    {
        /* $sql = "";
        return $this->select(); */
    }

    public function eliminar()
    {
      /*   $sql = "UPDATE alumnos WHERE id = ?";
        $array = array();
        return $this->save(); */
    }
    
}

?>