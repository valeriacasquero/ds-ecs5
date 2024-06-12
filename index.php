<?php 
require_once '../ds-ecs5/modelo/cliente.php'; 
require_once '../ds-ecs5/modelo/marca.php';
require_once '../ds-ecs5/modelo/producto.php';
require_once '../ds-ecs5/modelo/proveedor.php';

$cliente1 = new cliente();
$cliente1->Id = 1;
$cliente1->nombreApellido = 'Walter Quintana';
$cliente1->numeroDeDocumento = 39663133;

$marca1 = new marca();
$marca1-> Id = 1;
$marca1-> Descripcion = 'Alto';
$marca1-> Codigo = 25;

$prod = new producto ();
$prod->Id = 1;
$prod->Codigo = 27;
$prod->Descripcion = 'Bajo';
$prod->marca = $marca1;

$prov = new proveedor ();
$prov->Id = 2;
$prov->NombreApellido = 'Raul Gonzalez';
$prov->numeroDocumento = 11108150;
$prov->producto = $prod;


$cliente1->MostrasDatos();

$p = new proveedor;
$p->Id=$prov->Id;
$p->NombreApellido=$prov->NombreApellido;
$p->numeroDocumento=$prov->numeroDocumento;
$p->producto=$prod;


$p->MostrarDatos();
