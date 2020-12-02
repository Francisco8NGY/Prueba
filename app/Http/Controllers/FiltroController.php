<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Propiedad;
use App\Models\Documento;
use App\Models\Domicilio;
use App\Models\Municipio;



class FiltroController extends Controller
{
    

   

    public function info($id){

        $post = Propiedad::find($id);
        $domi = Domicilio::find($post->domicilio_id);
        $muni = Municipio::find($domi->municipio_id);
        $docu = Documento::find($post->documentos_id);
        
        

        $status = "";
        if($post->status == 1 ){
            $status = "En venta";
        }else if($post->status == 2 ){
            $status = "En renta";
        }

        return view('informacion_propiedad', compact('docu', 'status', 'post', 'muni'));
    }
}
