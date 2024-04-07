<?php

class Pasajero
{
  //variables
  private $nombre;
  private $apellido;
  private $doc;
  private $tel;

  public function __construct($nombre, $apellido, $doc, $tel)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->doc = $doc;
    $this->tel = $tel;
  }
  //getters
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  public function getDoc()
  {
    return $this->doc;
  }
  public function getTel()
  {
    return $this->tel;
  }
  //setters
  public function setNombre($nuevoNombre)
  {
    $this->nombre = $nuevoNombre;
  }
  public function setApellido($nuevoApellido)
  {
    $this->apellido = $nuevoApellido;
  }
  public function setDoc($nuevoDoc)
  {
    $this->doc = $nuevoDoc;
  }
  public function setTel($nuevoTel)
  {
    $this->tel = $nuevoTel;
  }

  public function __toString()
  {
    return $this->getNombre()
      . " "
      . $this->getApellido()
      . "\n"
      . $this->getDoc()
      . "\n"
      . $this->getTel()
      . "\n";
  }
}
