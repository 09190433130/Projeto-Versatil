<?php

class Carro {

public $marca;
public $modelo;
public $motor;


function getMarca() {
return $this->marca;
}

function getModelo(){
return $this->modelo;
}

function getMotor(){
return $this->motor;
}

function setMarca($marca) {
$this->marca = $marca;
}

function setModelo ($modelo) {
$this->modelo = $modelo;
}

function setMotor($motor) {
$this->motor = $motor;
}

public function potencia_motor($motor) {
if ($motor >= 1.8) {
echo "Potencia do motor: Carro potente";
}
else{
echo "Potencia do motor: Carro popular";
}
}
public function listaCarro() {
echo "
<p>Marca: {$this->marca}</p>
<p>Modelo: {$this->modelo}</p>
<p>Motor: {$this->motor}</p>
{this->potencia_motor($this->motor)}";
}
}
?>