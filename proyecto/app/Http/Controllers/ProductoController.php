<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function bienvenida(){
        return view('producto.Bienvenida');
    }
    public function bye(){
        return view('producto.bye');
    }
    public function viewProducto(){
        return view('producto.viewProducto');
    }
    public function viewInsertProd(){
        return view('producto.viewInsertProd');
    }
 
}
