<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-500 leading-tight">
            {{ __('Agregar propiedad') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                

                
                    <div class="container mx-auto">
                        <div class="inputs w-full max-w-2xl p-6 mx-auto">
                            <h2 class="text-2xl text-teal-500">Información de la propiedad:</h2>
                            <form action="{{route('propiedades.store')}}" method="POST" class="mt-6 border-t border-teal-500 pt-4" enctype="multipart/form-data">
                                @csrf
                                
                                <div class='flex flex-wrap -mx-3 mb-6'>
                                    
                                    
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' for='grid-text-1'>Breve Descripción de la propiedad</label>
                                        <input name="descripcion" value="{{old('descripcion')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'  type='text' placeholder='Descripción'  >
                                        @if ($errors->first('descripcion'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('descripcion')}}</div>
                                                @endif
                                    </div>

                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Descripción larga de la propiedad</label>
                                        <textarea name="long_descripcion" value="{{old('long_descripcion')}}" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'  ></textarea>
                                        @if ($errors->first('long_descripcion'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('long_descripcion')}}</div>
                                                @endif
                                    </div>
                                    
                                    
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2'>Tipo de propiedad</label>
                                        <div class="flex-shrink w-full inline-block relative">
                                            <select name="tipo_propiedad" value="{{old('tipo_propiedad')}}" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded" required>
                                                <option value="0">Seleccionar ...</option>
                                                <option value="1">Residencial</option>
                                                <option value="2">Comercial</option>
                                                <option value="3">Industrial</option>
                                            </select>
                                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2'>Estatus de la propiedad</label>
                                        <div class="flex-shrink w-full inline-block relative">
                                            <select name="status" value="{{old('status')}}" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded" required>
                                                <option value="0">Seleccionar ...</option>
                                                <option value="1">En venta</option>
                                                <option value="2">En renta</option>
                                                
                                            </select>
                                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Edad de la propiedad</label>
                                        <input name="edad" value="{{old('edad')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number' >
                                        @if ($errors->first('edad'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('edad')}}</div>
                                                @endif
                                    </div>
                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Metros cuadrados de construcción</label>
                                        <input name="m2construccion" value="{{old('m2construccion')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                        @if ($errors->first('m2construccion'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('m2construccion')}}</div>
                                                @endif
                                    </div>


                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Metros cuadrados de terreno</label>
                                        <input name="m2terreno" value="{{old('m2terreno')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                        @if ($errors->first('m2terreno'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('m2terreno')}}</div>
                                                @endif
                                    </div>

                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Numero de baños</label>
                                        <input name="no_banos" value="{{old('no_banos')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                        @if ($errors->first('no_banos'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('no_banos')}}</div>
                                                @endif
                                    </div>

                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Numero de cuartos</label>
                                        <input name="no_cuartos" value="{{old('no_cuartos')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                        @if ($errors->first('no_cuartos'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('no_cuartos')}}</div>
                                                @endif
                                    </div>
                                    
                                    
                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Precio $$$</label>
                                        <input name="precio" value="{{old('precio')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                        @if ($errors->first('precio'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('precio')}}</div>
                                                @endif
                                    </div>
                                    
                                    <div class='w-full md:w-1/2 px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Numero de niveles</label>
                                        <input name="no_niveles" value="{{old('no_niveles')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                        @if ($errors->first('no_niveles'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('no_niveles')}}</div>
                                                @endif
                                    </div>
                                    
                                    <div class='w-full md:w-full px-3 mb-6'>
                                        <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' for='grid-text-1'>Nombre del propietario</label>
                                        <input name="nombre_propietario" value="{{old('nombre_propietario')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'  type='text' placeholder='Nombre del propietario'>
                                        @if ($errors->first('nombre_propietario'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('nombre_propietario')}}</div>
                                                @endif
                                    </div>
                                
                                
                                    <div class="w-full border-t border-teal-500 pt-4">
                                        <h2 class="text-2xl text-teal-500">Domicilio:</h2>
                                        <div class='w-full md:w-full px-3 mb-6 mt-4'>
                                            <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' for='grid-text-1'>Calle</label>
                                            <input name="calle" value="{{old('calle')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'  type='text' placeholder='Calle'  >
                                            @if ($errors->first('calle'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('calle')}}</div>
                                                @endif
                                        </div>
                                        <div class='w-full md:w-1/2 px-3 mb-6'>
                                            <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Numero</label>
                                            <input name="numero" value="{{old('numero')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='number'>
                                            @if ($errors->first('numero'))
                                                      <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('numero')}}</div>
                                                    @endif
                                        </div>
                                        <div class='w-full md:w-full px-3 mb-6 mt-4'>
                                            <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' for='grid-text-1'>Colonia</label>
                                            <input name="colonia" value="{{old('colonia')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'  type='text' placeholder='Colonia'  >
                                            @if ($errors->first('colonia'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('colonia')}}</div>
                                                @endif
                                        </div>
                                        <div class='w-full md:w-full px-3 mb-6'>
                                            <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2'>Municipio</label>
                                            <div class="flex-shrink w-full inline-block relative">
                                                <select name="municipio_id" value="{{old('municipio_id')}}" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded" required>
                                                    <option >Seleccionar ...</option>
                                                    @foreach ($municipios as $municipio)
                                                        <option value="{{$municipio->id}}">{{$municipio->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                           
                                        </div>
                                        <div class='w-full md:w-full px-3 mb-6 mt-4'>
                                            <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' for='grid-text-1'>Código Postal</label>
                                            <input name="zip_codigopostal" value="{{old('zip_codigopostal')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'  type='text' placeholder='Código postal'  >
                                            @if ($errors->first('zip_codigopostal'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('zip_codigopostal')}}</div>
                                                @endif
                                        </div> 
                                       
                                        
                                       
                                    </div>
                                   

                                    <div class="w-full border-t border-teal-500 pt-4">
                                        <h2 class="text-2xl text-teal-500">Documentos:</h2>

                                        <div class="flex items-center justify-between mt-4">
                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Escrituras</label>
                                                <input name="escrituras" value="{{old('escrituras')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='file'  >
                                                @if ($errors->first('escrituras'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('escrituras')}}</div>
                                                @endif
                                               
                                            </div>
                                            
                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Foto calle</label>
                                                <input name="foto_calle" value="{{old('foto_calle')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='file'  >
                                                @if ($errors->first('foto_calle'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('foto_calle')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                      
                                        <div class="flex items-center justify-between mt-4">
                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Foto fondo</label>
                                                <input name="foto_fondo" value="{{old('foto_fondo')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='file'  >
                                                @if ($errors->first('foto_fondo'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('foto_fondo')}}</div>
                                                @endif
                                            </div>
                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Foto frente</label>
                                                <input name="foto_frente" value="{{old('foto_frente')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='file' >
                                                @if ($errors->first('foto_frente'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('foto_frente')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between mt-4">
                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Foto interior</label>
                                                <input name="foto_interior" value="{{old('foto_interior')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='file'  >
                                                @if ($errors->first('foto_interior'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('foto_interior')}}</div>
                                                @endif
                                            </div>
                                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                                <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' >Foto nivel</label>
                                                <input name="foto_nivel" value="{{old('foto_nivel')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='file' >
                                                @if ($errors->first('foto_nivel'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('foto_nivel')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class='w-full md:w-full px-3 mb-6 mt-4'>
                                            <label class='block uppercase tracking-wide text-teal-500 text-xs font-bold mb-2' for='grid-text-1'>Recibo Predial</label>
                                            <input name="recibo_predial" value="{{old('recibo_predial')}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'  type='file' >
                                            @if ($errors->first('recibo_predial'))
                                                  <div class="bg-red-200 relative text-red-500 py-3 px-3 rounded-lg">{{$errors->first('recibo_predial')}}</div>
                                                @endif
                                        </div>
                                       

                                       
                                       
                                        
                                        <div class="flex justify-end">
                                            <button class="inline-flex items-center px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 active:bg-teal-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="submit">save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  


            </div>
        </div>
    </div>
</x-app-layout>