<?php

class ResponsableV
{
  //variables
  private $nroEmpleado;
  private $nroLicencia;
  private $nombre;
  private $apellido;

  //getters
  public function getNroEmpleado()
  {
    return $this->nroEmpleado;
  }
  public function getNroLicencia()
  {
    return $this->nroLicencia;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  //setters
  public function setNroEmpleado($nuevoNroEmpleado)
  {
    $this->nroEmpleado = $nuevoNroEmpleado;
  }
  public function setNroLicencia($nuevoNroLicencia)
  {
    $this->nroLicencia = $nuevoNroLicencia;
  }
  public function setNombre($nuevoNombre)
  {
    $this->nombre = $nuevoNombre;
  }
  public function setApellido($nuevoApellido)
  {
    $this->apellido = $nuevoApellido;
  }

  public function __toString()
  {
    return $this->getNombre()
      . " "
      . $this->getApellido()
      . "\n"
      . "Número de Empleado: "
      . $this->getNroEmpleado()
      . "\n"
      . "Número de Licencia: "
      . $this->getNroLicencia()
      . "\n";
  }
}
