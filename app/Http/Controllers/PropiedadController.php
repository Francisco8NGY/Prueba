<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Propiedad;
use App\Models\Documento;
use App\Models\Domicilio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propiedades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        
        return view('propiedades/create', compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'escrituras' => 'required|image|nullable|max:1999',
            'foto_calle' => 'required|image|nullable|max:1999',
            'foto_fondo' => 'required|image|nullable|max:1999',
            'foto_frente' => 'required|image|nullable|max:1999',
            'foto_interior' => 'required|image|nullable|max:1999',
            'foto_nivel' => 'required|image|nullable|max:1999',
            'recibo_predial' => 'required|image|nullable|max:1999',

            'calle' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'municipio_id' => 'required|integer',
            'numero' => 'required|integer',
            'zip_codigopostal' => 'required|string|max:255',

            'descripcion' => 'required|string|max:255',
            'edad' => 'required|integer',
            'long_descripcion' => 'required|string|max:255',
            'm2construccion' => 'required|integer',
            'm2terreno' => 'required|integer',
            'no_banos' => 'required|integer',
            'no_cuartos' => 'required|integer',
            'no_niveles' => 'required|integer',
            'nombre_propietario' => 'required|string|max:255',
            'tipo_propiedad' => 'required|integer',
            'status' => 'required|integer',
            'precio' => 'required|integer'


            

            
        ]);

        DB::transaction(function () use ($request) {
            
            //escrituras
         if($request->hasFile('escrituras')){

            $fileEscrituras = $request->file('escrituras');
              //get filename with extension
              $filenameWithExtEscrituras = $request->file('escrituras')->getClientOriginalName();
              //get just filename
              $filenameEscrituras = pathinfo($filenameWithExtEscrituras, PATHINFO_FILENAME);
              //get just ext
              $extensionEscrituras = $request->file('escrituras')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreEscrituras = $filenameEscrituras .'_'.time().'.'.$extensionEscrituras;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
              //$this->resizeImage($fileEscrituras, $fileNameToStoreEscrituras);
              $path = $request->file('escrituras')->storeAs('public/cover_images',$fileNameToStoreEscrituras);
            
          }else{
              $fileNameToStoreEscrituras = 'noimage.jpeg';
          }

          if($request->hasFile('foto_calle')){

            $fileFotoCalle = $request->file('foto_calle');
              //get filename with extension
            //foto_calle
              $filenameWithExtFotoCalle = $request->file('foto_calle')->getClientOriginalName();
              //get just filename
              $filenameFotoCalle = pathinfo($filenameWithExtFotoCalle, PATHINFO_FILENAME);
              //get just ext
              $extensionFotoCalle = $request->file('foto_calle')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreFotoCalle = $filenameFotoCalle .'_'.time().'.'.$extensionFotoCalle;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
             // $this->resizeImage($fileFotoCalle, $fileNameToStoreFotoCalle);
             $path = $request->file('foto_calle')->storeAs('public/cover_images',$fileNameToStoreFotoCalle);
             
  
          }else{
              $fileNameToStoreFotoCalle = 'noimage.jpeg';
          }

          //foto_fondo
         if($request->hasFile('foto_fondo')){

            $fileFotoFondo = $request->file('foto_fondo');
              //get filename with extension
              $filenameWithExtFotoFondo = $request->file('foto_fondo')->getClientOriginalName();
              //get just filename
              $filenameFotoFondo = pathinfo($filenameWithExtFotoFondo, PATHINFO_FILENAME);
              //get just ext
              $extensionFotoFondo = $request->file('foto_fondo')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreFotoFondo = $filenameFotoFondo .'_'.time().'.'.$extensionFotoFondo;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
              //$this->resizeImage($fileFotoFondo, $fileNameToStoreFotoFondo);
              $path = $request->file('foto_fondo')->storeAs('public/cover_images',$fileNameToStoreFotoFondo);
            
  
          }else{
              $fileNameToStoreFotoFondo = 'noimage.jpeg';
          }

          //foto_frente
         if($request->hasFile('foto_frente')){

            $fileFotoFrente = $request->file('foto_frente');
              //get filename with extension
              $filenameWithExtFotoFrente = $request->file('foto_frente')->getClientOriginalName();
              //get just filename
              $filenameFotoFrente = pathinfo($filenameWithExtFotoFrente, PATHINFO_FILENAME);
              //get just ext
              $extensionFotoFrente = $request->file('foto_frente')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreFotoFrente = $filenameFotoFrente .'_'.time().'.'.$extensionFotoFrente;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
              //$this->resizeImage($fileFotoFrente, $fileNameToStoreFotoFrente);
              $path = $request->file('foto_frente')->storeAs('public/cover_images',$fileNameToStoreFotoFrente);
            
          }else{
              $fileNameToStoreFotoFrente = 'noimage.jpeg';
          }

          //foto_interior
         if($request->hasFile('foto_interior')){

            $fileFotoInterior = $request->file('foto_interior');
              //get filename with extension
              $filenameWithExtFotoInterior = $request->file('foto_interior')->getClientOriginalName();
              //get just filename
              $filenameFotoInterior = pathinfo($filenameWithExtFotoInterior, PATHINFO_FILENAME);
              //get just ext
              $extensionFotoInterior = $request->file('foto_interior')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreFotoInterior = $filenameFotoInterior .'_'.time().'.'.$extensionFotoInterior;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
             // $this->resizeImage($fileFotoInterior, $fileNameToStoreFotoInterior);
             $path = $request->file('foto_interior')->storeAs('public/cover_images',$fileNameToStoreFotoInterior);
             
          }else{
              $fileNameToStoreFotoInterior = 'noimage.jpeg';
          }

          //foto_nivel
         if($request->hasFile('foto_nivel')){

            $fileFotoNivel = $request->file('foto_nivel');
              //get filename with extension
              $filenameWithExtFotoNivel = $request->file('foto_nivel')->getClientOriginalName();
              //get just filename
              $filenameFotoNivel = pathinfo($filenameWithExtFotoNivel, PATHINFO_FILENAME);
              //get just ext
              $extensionFotoNivel = $request->file('foto_nivel')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreFotoNivel = $filenameFotoNivel .'_'.time().'.'.$extensionFotoNivel;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
             // $this->resizeImage($fileFotoNivel, $fileNameToStoreFotoNivel);
             $path = $request->file('foto_nivel')->storeAs('public/cover_images',$fileNameToStoreFotoNivel);
            
  
          }else{
              $fileNameToStoreFotoNivel = 'noimage.jpeg';
          }

          //recibo_predial
         if($request->hasFile('recibo_predial')){

            $fileReciboPredial = $request->file('recibo_predial');
              //get filename with extension
              $filenameWithExtReciboPredial = $request->file('recibo_predial')->getClientOriginalName();
              //get just filename
              $filenameReciboPredial = pathinfo($filenameWithExtReciboPredial, PATHINFO_FILENAME);
              //get just ext
              $extensionReciboPredial = $request->file('recibo_predial')->getClientOriginalExtension();
              //filename to store
              $fileNameToStoreReciboPredial = $filenameReciboPredial .'_'.time().'.'.$extensionReciboPredial;
              //upload image
              //$path = $request->file('image')->storeAs('public/images',$fileNameToStore);
             // $this->resizeImage($fileReciboPredial, $fileNameToStoreReciboPredial);
             $path = $request->file('recibo_predial')->storeAs('public/cover_images',$fileNameToStoreReciboPredial);
             
          }else{
              $fileNameToStoreReciboPredial = 'noimage.jpeg';
          }


          

          $documento = new Documento;
          
          if($request->hasFile('escrituras')){
            $documento->escrituras = $fileNameToStoreEscrituras;
        }

        if($request->hasFile('foto_calle')){
            $documento->foto_calle =  $fileNameToStoreFotoCalle;
        }
        if($request->hasFile('foto_fondo')){
            $documento->foto_fondo = $fileNameToStoreFotoFondo;
        }
        if($request->hasFile('foto_frente')){
            $documento->foto_frente = $fileNameToStoreFotoFrente;
        }
        if($request->hasFile('foto_interior')){
            $documento->foto_interior = $fileNameToStoreFotoInterior;
        }
        if($request->hasFile('foto_nivel')){
            $documento->foto_nivel = $fileNameToStoreFotoNivel;
        }
        if($request->hasFile('recibo_predial')){
            $documento->recibo_predial = $fileNameToStoreReciboPredial;
        }
           
          $documento->save(); 
          
          
          $domicilio = new Domicilio;
          $domicilio->calle = $request->input('calle');
          $domicilio->numero = $request->input('numero');
          $domicilio->colonia = $request->input('colonia');
          $domicilio->municipio_id = $request->input('municipio_id');
          $domicilio->zip_codigopostal = $request->input('zip_codigopostal');
          $domicilio->save();
 
          $municipio = Domicilio::latest('id')->first();
          $documento = Documento::latest('id')->first();
           

          $propiedad = new Propiedad;
          $propiedad->descripcion = $request->input('descripcion');
          $propiedad->domicilio_id = $municipio->id;
          $propiedad->documentos_id = $documento->id;
          $propiedad->edad = $request->input('edad');
          $propiedad->long_descripcion = $request->input('long_descripcion');
          $propiedad->tipo_propiedad = $request->input('tipo_propiedad');
          $propiedad->status = $request->input('status');
          $propiedad->m2construccion = $request->input('m2construccion');
          $propiedad->m2terreno = $request->input('m2terreno');
          $propiedad->no_banos = $request->input('no_banos');
          $propiedad->no_cuartos = $request->input('no_cuartos');
          $propiedad->precio = $request->input('precio');
          $propiedad->no_niveles = $request->input('no_niveles');
          $propiedad->nombre_propietario = $request->input('nombre_propietario');
          $propiedad->save();
          


        });
       

         
          return view('propiedades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
