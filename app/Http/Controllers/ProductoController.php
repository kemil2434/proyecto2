<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use Exception;
class ProductoController extends Controller
{
    public function listarProducto(){

        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            toast('Conexion exitosa','success');

        }catch(Exception $ex){
            alert()->error('Error', $ex->getMessage())->toToast();
        }



        $productos = Producto:: all ();
        /*$productos = [
            [
            "id"=> "2",
            "nombre"=> "Sudadera con capucha 30 ",
            "categoria"=> "ropa ",
            "descripcion"=> "Deportiva, Moderna",
            "imagen"=> "OIG2.jpg",
            "precio"=> "80.00 $ $",
            "stock"=> "50",
            "fecha-registro"=> "23/12/23",  
            ],
            [
            "id"=> "5",
            "nombre"=> "sudadera-nike26",
            "categoria"=> "ropa",
            "descripcion"=> "Caliente, Suave",
            "imagen"=> "OIG3.jpg",
            "precio"=> "130.00 $",
            "stock"=> "34 ",
            "fecha-registro"=> "13/08/23 ",
         
            ],
            [
            "id"=> "5",
            "nombre"=> "sudadera-nike43",
            "categoria"=> "ropa",
            "descripcion"=> "Abrazadora, Versátil",
            "imagen"=> "OIG5.jpg",
            "precio"=> "170.00 $",
            "stock"=> "60 ",
            "fecha-registro"=> "17/08/23 ",
            ],
            [
            "id"=> "7",
            "nombre"=> "Sudadera deportiva",
            "categoria"=> "ropa",
            "descripcion"=> "Sudadera: Cómoda" ,
            "imagen"=> "OIG7.jpg",
            "precio"=> "140.00 $",
            "stock"=> "34",
            "fecha-registro"=> "18/08/23",
            ],
            [
            "id"=> "6",
            "nombre"=> "Sudadera adidas",
            "categoria"=> "ropa",
            "descripcion"=> "Lujosa, Exclusiva",
            "imagen"=> "OIG.jpg",
            "precio"=> "59.00 $",
            "stock"=> "39",
            "fecha-registro"=> "29/08/23",
            ],
           
        ];*/
    



        //dd($productos);
        return view("lista-productos",compact('productos'));

    }

    public function mostrarProducto(Request $request, $id){

         //dd($request);

         return view ('mostrar-producto',compact('id'));

    }
}
