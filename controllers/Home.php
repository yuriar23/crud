<?php
class Home extends Controller 
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $data['title'] = 'Mi primer crud';
        $data['script'] = 'alumno.js';
        $this->views->getView('home', 'alumno', $data);
    }
    //Cargue un listado de los alumnos
    public function listaralumno(){
        
    }

     //registar
    public function registrar()
    {
        
    }


    // Muestra los datos en el formulario
        public function editaralumno($idalumno)
        {
            
        }

    

    
   ///Funccion de eliminar
   public function eliminaralumno($idalumno)
   {
      
   } 

   public function importar()
    {
        $data['title'] = '';//el nombre que gusten
        $data['script'] = '';//Indique el nombre que desea asignar a su archivo JavaScript (JS).
        $this->views->getView('importar', 'index', $data);
    }




    


    public function alumnoscsv() {
        
    
    
}

}

