<?php

class cliente {
    public $Id;
    public $nombreApellido;
    public $numeroDeDocumento;

    public function MostrasDatos(){

        echo 'Id cliente: '. $this->Id.'<br>';
        echo 'Nombre y Apellido cliente: '. $this->nombreApellido.'<br>';
        echo 'Numero de documento cliente: '. $this->numeroDeDocumento.'<br>';
    }
}


  