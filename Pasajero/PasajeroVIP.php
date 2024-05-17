<?php

include_once "./Pasajero.php";

class PasajeroVIP extends Pasajero
{
  private $nroViajeroFrecuente;
  private $cantMillas;

  public function __construct($nroViajeroFrecuente, $cantMillas, $nombre, $asiento, $nroTicket)
  {
    parent::__construct($nombre, $asiento, $nroTicket);
    $this->nroViajeroFrecuente = $nroViajeroFrecuente;
    $this->cantMillas = $cantMillas;
  }

  public function getNroViajeroFrecunte()
  {
    return $this->nroViajeroFrecuente;
  }
  public function getCantMillas()
  {
    return $this->cantMillas;
  }

  public function setNroViajeroFrecuente($nuevoNro)
  {
    $this->nroViajeroFrecuente = $nuevoNro;
  }
  public function setCantMillas($nuevasMillas)
  {
    $this->cantMillas = $nuevasMillas;
  }
  public function darPorcentajeIncremento()
  {
    $millas = $this->getCantMillas();
    $porcentaje = 1.35;
    if ($millas > 300) {
      $porcentaje = 1.30;
    }
    return $porcentaje;
  }

  public function __toString()
  {
    $cadena = "";
    $cadena .= parent::__toString();
    $cadena .= $this->getNroViajeroFrecunte() . "\n";
    $cadena .= $this->getCantMillas() . "\n";
  }
}
