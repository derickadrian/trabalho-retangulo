<?php

namespace App\Model;

class Rectangle
{

  private $altura;
  private $largura;

  public function __construct()
  {
  }

  public function __destruct()
  {
  }

  public function __get($atribute)
  {
    return $this->$atribute;
  }

  public function __set($atribute, $value)
  {
    $this->$atribute = $value;
  }

  public function area()
  {
    return $this->altura * $this->largura;
  }

  public function perimeter()
  {
    return $this->altura + $this->largura + $this->altura + $this->largura;
  }

  public function __toString()
  {
    return nl2br("
                Altura: $this->altura
                Largura: $this->largura
                Área: {$this->area()}
                Perímetro: {$this->perimeter()}");
  }
}
?>
