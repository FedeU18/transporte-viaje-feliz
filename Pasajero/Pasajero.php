<?php

class Pasajero
{
  //variables
  private $nombre;
  private $asiento;
  private $nroTicket;

  public function __construct($nombre, $asiento, $nroTicket)
  {
    $this->nombre = $nombre;
    $this->asiento = $asiento;
    $this->nroTicket = $nroTicket;
  }
  //getters
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getAsiento()
  {
    return $this->asiento;
  }
  public function getNroTicket()
  {
    return $this->nroTicket;
  }

  //setters
  public function setNombre($nuevoNombre)
  {
    $this->nombre = $nuevoNombre;
  }
  public function setAsiento($nuevoAsiento)
  {
    $this->asiento = $nuevoAsiento;
  }
  public function setDoc($nuevoNroTicket)
  {
    $this->nroTicket = $nuevoNroTicket;
  }

  public function darPorcentajeIncremento()
  {
    return 1.10;
  }


  public function __toString()
  {
    return $this->getNombre()
      . " "
      . $this->getAsiento()
      . "\n"
      . $this->getNroTicket()
      . "\n";
  }
}
