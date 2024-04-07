<?php

class Viaje
{
  //variables
  private $codigo;
  private $destino;
  private $cantMaxPasajeros;
  private $colObjPasajeros;
  private $objResponsableV;

  public function __construct(int $codigo, $destino, int $cantMaxPasajeros, $objResponsableV)
  {
    $this->codigo = $codigo;
    $this->destino = $destino;
    $this->cantMaxPasajeros = $cantMaxPasajeros;
    $this->colObjPasajeros = [];
    $this->objResponsableV = $objResponsableV;
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
  // public function setPasajero($DNI, $nuevaInfoPasajero, $accion)
  // {
  //   $i = 0;
  //   $yaExiste = false;
  //   $pasajeros = $this->getPasajeros();
  //   //verificar si un pasajero con ese dni ya existe
  //   while ($i < count($pasajeros) && !$yaExiste) {
  //     if ($pasajeros[$i]["DNI"] == $DNI) {
  //       $yaExiste = !$yaExiste;
  //     }
  //     $i++;
  //   }
  //   //verifica si existe el pasajero y lo modifica
  //   if ($yaExiste && $accion == "modificar") {
  //     $this->pasajeros[$i - 1] = $nuevaInfoPasajero;
  //   }
  //   //verifica si no existe el pasajero y lo crea
  //   elseif (!$yaExiste && $accion == "crear") {
  //     array_push($this->pasajeros, $nuevaInfoPasajero);
  //   }
  // }

  /**
   * Agrega un nuevo pasajero a la colección
   * @param string $nombre
   * @param string $apellido
   * @param int $doc
   * @param int $tel
   */
  public function agregarPasajero($nuevoPasajero)
  {
    // $pasajeros = $this->getPasajeros();
    // $i = 0;
    // $yaExiste = false;
    // while ($i < count($pasajeros) && !$yaExiste) {
    //   if ($pasajeros[$i]->getDoc() == $doc) {
    //     $yaExiste = !$yaExiste;
    //   }
    //   $i++;
    // }
    // if (!$yaExiste && count($pasajeros) < $this->getCantMaxPasajeros()) {
    //   $nuevoPasajero = new Pasajero($nombre, $apellido, $doc, $tel);
    //   array_push($this->colObjPasajeros, $nuevoPasajero);
    // }
    array_push($this->colObjPasajeros, $nuevoPasajero);
  }

  /**
   * encuentra el pasajero dado un DNI y devuelve su posición en la colección
   * @param int $DNI
   * @return int
   */
  public function encontrarPasajero($DNI)
  {
    $i = 0;
    $encontrado = false;
    $pasajeros = $this->getPasajeros();
    $pasajeroEncontrado = -1;
    while ($i < count($pasajeros) && !$encontrado) {
      if ($pasajeros[$i]->getDoc() == $DNI) {
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
