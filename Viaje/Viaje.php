<?php

class Viaje
{
  //variables
  private $codigo;
  private $destino;
  private $cantMaxPasajeros;
  private $colObjPasajeros;
  private $objResponsableV;
  private $costo;

  public function __construct(int $codigo, $destino, int $cantMaxPasajeros, $objResponsableV, $costo)
  {
    $this->codigo = $codigo;
    $this->destino = $destino;
    $this->cantMaxPasajeros = $cantMaxPasajeros;
    $this->colObjPasajeros = [];
    $this->objResponsableV = $objResponsableV;
    $this->costo = $costo;
  }
  //getters
  public function getCodigo()
  {
    return $this->codigo;
  }
  public function getDestino()
  {
    return $this->destino;
  }
  public function getCantMaxPasajeros()
  {
    return $this->cantMaxPasajeros;
  }
  public function getPasajeros()
  {
    return $this->colObjPasajeros;
  }
  public function getResponsableV()
  {
    return $this->objResponsableV;
  }
  public function getCosto()
  {
    return $this->costo;
  }

  //setters
  public function setCodigo($nuevoCodigo)
  {
    $this->codigo = $nuevoCodigo;
  }
  public function setDestino($nuevoDestino)
  {
    $this->destino = $nuevoDestino;
  }
  public function setCantMaxPasajeros($nuevaCantMax)
  {
    $this->cantMaxPasajeros = $nuevaCantMax;
  }
  public function setColObjPasajeros($nuevaCol)
  {
    $this->colObjPasajeros = $nuevaCol;
  }
  public function setCosto($nuevoCosto)
  {
    $this->costo = $nuevoCosto;
  }

  /**
   * encuentra el pasajero dado un DNI y devuelve su posición en la colección
   * @param int $DNI
   * @return int
   */
  public function encontrarPasajero($nroTicket)
  {
    $i = 0;
    $encontrado = false;
    $pasajeros = $this->getPasajeros();
    $pasajeroEncontrado = -1;
    while ($i < count($pasajeros) && !$encontrado) {
      if ($pasajeros[$i]->getNroTicket() == $nroTicket) {
        $encontrado = !$encontrado;
      }
      $i++;
    }
    if ($encontrado) {
      $pasajeroEncontrado =  $i - 1;
    }
    return $pasajeroEncontrado;
  }

  public function __toString()
  {
    return "Código de viaje: "
      . $this->getCodigo()
      . "\n"
      . "Destino: "
      . $this->getDestino()
      . "\n"
      . "Cantidad máxima de pasajeros: "
      . $this->getCantMaxPasajeros()
      . "\n"
      . "Cantidad actual de pasajeros: "
      . count($this->getPasajeros())
      . "\n";
  }
}
