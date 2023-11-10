<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;
class RegistroPersonaWebController extends Controller
{
    public function registroPersona(){
        //dd("kemil");
        return view ('web.registro-persona-web');

    }



    public function guardarPersona(Request $request){
       /* $mensaje = session('mensaje');
        if($mensaje){
         alert()->success('Exitoso', $mensaje)->toToast();
 
 */  //dd($request);
        
        try{
            $data = [
                'nombres'=> $request->get('nombres'),
                'paterno'=> $request->get('paterno'),
                'materno'=> $request->get('materno'),
                'bibliografia'=> $request->get('bibliografia'),
                'foto'=> $request->get('foto'),
                'documento'=> $request->get('documento'),
                'celular'=> $request->get('celular'),    
    
            ];
        
        
        Persona::create($data);
        
            return redirect()
            ->route('lista-personas')
            -> with('mensaje','Persona registrada correctamente !!');
        }catch(Exception $ex){
            dd($ex->getMessage());
        
            return redirect()
            ->route('registro.persona')
            -> with('mensaje',$ex->getMessage());


    }

}

}