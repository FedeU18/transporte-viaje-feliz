<?php

include_once "./Pasajero.php";

class PasajeroConNecesidades extends Pasajero
{
  private $sillaDeRuedas;
  private $asistencia;
  private $comidaEspecial;

  public function __construct($sillaDeRuedas, $asistencia, $comidaEspecial, $nombre, $asiento, $nroTicket)
  {
    parent::__construct($nombre, $asiento, $nroTicket);
    $this->sillaDeRuedas = $sillaDeRuedas;
    $this->asistencia = $asistencia;
    $this->comidaEspecial = $comidaEspecial;
  }

  public function getSillaDeRuedas()
  {
    return $this->sillaDeRuedas;
  }
  public function getAsistencia()
  {
    return $this->asistencia;
  }
  public function getComidaEspecial()
  {
    return $this->comidaEspecial;
  }

  public function setSillaDeRuedas()
  {
    $this->sillaDeRuedas = !$this->getSillaDeRuedas();
  }
  public function setAsistencia()
  {
    $this->asistencia = !$this->getAsistencia();
  }
  public function setComidaEspecial()
  {
    $this->comidaEspecial = !$this->getComidaEspecial();
  }


  public function darPorcentajeIncremento()
  {
    // Si el pasajero tiene necesidades especiales y requiere silla de ruedas, asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados entonces el incremento es del 15%.
    $sillaDeRuedas = $this->getSillaDeRuedas();
    $asistencia = $this->getAsistencia();
    $comidaEspecial = $this->getComidaEspecial();
    $porcentaje = 1.30;
    if (
      ($sillaDeRuedas && !$asistencia && !$comidaEspecial) ||
      (!$sillaDeRuedas && $asistencia && !$comidaEspecial) ||
      (!$sillaDeRuedas && !$asistencia && $comidaEspecial)
    ) {
      $porcentaje = 1.15;
    }
    return $porcentaje;
  }
}
