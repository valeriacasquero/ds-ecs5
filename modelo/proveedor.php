<?php
class proveedor {
    public $Id;
    public $NombreApellido;
    public $numeroDocumento;
    public $producto;


    public function MostrarDatos(){
        echo 'Id proveedor: '. $this->Id .'<br>';
        echo 'Nombre y apellido proveedor: '. $this->NombreApellido.'<br>';
        echo 'Numero de Documento proveedor: '. $this->numeroDocumento.'<br>';
        echo 'Id Producto : '. $this->producto->Id.'<br>';
        echo 'Codigo producto: '. $this->producto->Codigo.'<br>';
        echo 'Descripcon producto: '. $this->producto->Descripcion.'<br>';
        echo 'Id Marca: '. $this->producto->marca->Id.'<br>';
        echo 'Descripcion marca: '. $this->producto->marca->Descripcion.'<br>';
        echo 'Codigo marca: '. $this->producto->marca->Codigo.'<br>';
    }
}