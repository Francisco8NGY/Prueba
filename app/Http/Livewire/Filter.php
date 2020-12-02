<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\Municipio;

class Filter extends Component
{
    
    

    
    public $status;
    public $tipo;
    public $municipio;
    public $search;
   
    use WithPagination;
    public function render()
    {
        $municipios = Municipio::all();

            if($this->status == 0 && $this->tipo == 0 ){
                $posts = DB::table('propiedads')
                ->join('documentos', 'propiedads.documentos_id', '=', 'documentos.id')
                ->select('propiedads.id','propiedads.descripcion', 'propiedads.no_banos', 'propiedads.precio', 'documentos.foto_frente')
                ->paginate(6);
            }else{
                $posts = DB::table('propiedads')
                ->join('documentos', 'propiedads.documentos_id', '=', 'documentos.id')
                ->join('domicilios', 'propiedads.domicilio_id', '=', 'domicilios.id')
                ->where("status","LIKE", "%$this->status%")
                ->where('tipo_propiedad', "LIKE", "%$this->tipo%")
                ->where('domicilios.municipio_id', "LIKE", "%$this->municipio%")
                ->where('domicilios.calle', "Like", "%$this->search%")  
                ->select('*')
                ->paginate(6);
               
            }
                      
        return view('livewire.filter', compact('posts', 'municipios'));
        
    }
    
}
