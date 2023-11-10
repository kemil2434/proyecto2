<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;
class PersonaController extends Controller
{
    public function listarPersona(){
        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            toast('Conexion exitosa','success');

        }catch(Exception $ex){
            alert()->error('Error', $ex->getMessage())->toToast();
        }





        $personas = Persona:: all ();
       /* $personas = [  

            [
            "personaID"=> "1",
            "nombres"=> "kemil",
            "paterno"=> "jimenez",
            "materno"=> "conodri",
            "bibliografia"=> "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            "foto"=> "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
            "documento"=> "397283",
            "celular"=> "92883746",
            ],
            [
            "personaID"=> "2",
            "nombres"=> "angel",
            "paterno"=> "ramirez",
            "materno"=> "cazedas",
            "bibliografia"=> "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            "foto"=> "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
            "documento"=> "347834",
            "celular"=> "98473943",
        ],
        [
            "personaID"=> "3",
            "nombres"=> "daniel",
            "paterno"=> "gomez",
            "materno"=> "condori",
            "bibliografia"=> "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            "foto"=> "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
            "documento"=> "3487349",
            "celular"=> "93479483",
        ],
        [
    
            "personaID"=> "4",
            "nombres"=> "david",
            "paterno"=> "quispe",
            "materno"=> "araujo",
            "bibliografia"=> "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            "foto"=> "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
            "documento"=> "347832",
            "celular"=> "98473943",
        ],
        [
    
            "personaID"=> "5",
            "nombres"=> "hernesto",
            "paterno"=> "artur",
            "materno"=> "ramos",
            "bibliografia"=> "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            "foto"=> "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
            "documento"=> "38348",
            "celular"=> "94939833",
        ]
        ];*/
        
        //dd($personas);
       
    

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

        
   
   












       



    
   
        
    
    
    
    return view('lista-personas',compact('personas'));
}
    
    
    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }
}
