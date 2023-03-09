<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


abstract class Articulo extends Model
{
    public int $importeTotal = 0;
    public int $costoUnitario = 100;
    public int $cantidad = 0;
    abstract function getCosto() : int;
}

class ServicioModel extends Articulo
{
    use HasFactory;
    private $horas = 0;
    public function getCosto() : int{
        return $this->horas * $this->costoUnitario * $this->cantidad;
    }
}


class ProductoModel extends Articulo
{
    use HasFactory;
    public function getCosto() : int{
        return  $this->costoUnitario * $this->cantidad;
    }
}



