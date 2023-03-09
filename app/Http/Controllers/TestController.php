<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use App\Models\ServicioModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $producto1 = new ServicioModel();
        $producto2 = new ProductoModel();


        $total = $producto1->getCosto() + $producto2->getCosto();

    }
}








