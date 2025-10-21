<?php
class Usuario {
    private $nombre;
    private $apellidos;
    private $cedula;
    private $provincia;

    public function __construct($nombre, $apellidos, $cedula, $provincia) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->cedula = $cedula;
        $this->provincia = $provincia;
    }           
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getApellidos() {
        return $this->apellidos;
    }
    
    public function getCedula() {
        return $this->cedula;
    }
    
    public function getProvincia() {
        return $this->provincia;
    }
}
?>