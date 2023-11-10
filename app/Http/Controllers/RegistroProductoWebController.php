<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Exception;
class RegistroProductoWebController extends Controller
{
    
    public function registroProducto(){
        return view ('web.registro-producto-web');


    }


    public function guardarProducto(Request $request){

        
        try{
        $data = [
            'id'=> $request->get('id'),
            'nombre'=> $request->get('nombre'),
            'categoria'=> $request->get('categoria'),
            'descripcion'=> $request->get('descripcion'),
            'imagen'=> $request->get('imagen'),
            'precio'=> $request->get('precio'),
            'stock'=> $request->get('stock'),
            'fecha_registro'=> $request->get('fecha_registro'),



        
        ];
    
        Producto::create($data);
        return redirect()
        ->route('lista-productos')
        -> with('mensaje','Producto registrado correctamente !!');
    }catch(Exception $ex){
        dd($ex->getMessage());
    
        return redirect()
        ->route('registro.producto')
        -> with('mensaje',$ex->getMessage());


}
        //dd($request);
  }
}
