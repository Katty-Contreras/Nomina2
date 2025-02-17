<?php

class Vendedor {
    public $nombre;
    public $ventas;

    public function __construct($nombre, $ventas) {
        $this->nombre = $nombre;
        $this->ventas = $ventas;
    }

    public function calcularSalario() {
        $salario = $this->ventas * 0.10;
        if ($this->ventas > 1000000) {
            $salario += $this->ventas * 0.05;
        }
        return $salario;
    }
}
