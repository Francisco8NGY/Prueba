
<div class="container mx-auto px-4 m-10"> 
    <nav class="sm:mx-auto px-40 navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">Selecciona:</a>
        <div class="collapse navbar-collapse" id="navbarNav">
           
                <div class="flex">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0  mt-2">
                        <div class="relative">
                            <select wire:model="status" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value="0">Operacion</option>
                                <option value="1">En venta</option>
                                <option value="2">En renta</option>
                            </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        </div>
                    </div>
                
         
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0  mt-2">
                        <div class="relative">
                        <select wire:model="tipo" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" >
                            <option value="0">Tipo</option>
                            <option value="1">Residencial</option>
                            <option value="2">Comercial</option>
                            <option value="3">Industrial</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        </div>
                    </div>
              
        
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0  mt-2">
                        <div class="relative">
                        <select wire:model="municipio" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="0">Municipio</option>
                            <option value="1">Armeria</option>
                            <option value="2">Colima</option>
                            <option value="3">Comala</option>
                            <option value="4">Coquimatlan</option>
                            <option value="5">Cuauhtemoc</option>
                            <option value="6">Ixtlahuacan</option>
                            <option value="7">Manzanillo</option>
                            <option value="8">Minatitlan</option>
                            <option value="9">Tecoman</option>
                            <option value="10">Villa de alvarez</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        </div>
                    </div>
            
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0  mt-2">
                        <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="">Localidad</option>
                            <option>Armeria</option>
                            <option>Colima</option>
                            <option>Comala</option>
                            <option>Coquimatlan</option>
                            <option>Cuauhtemoc</option>
                            <option>Ixtlahuacan</option>
                            <option>Manzanillo</option>
                            <option>Minatitlan</option>
                            <option>Tecoman</option>
                            <option>Villa de alvarez</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        </div>
                    </div>
        
                    
                </div>
            
        </div>
      </nav>
      <div class="flex flex-row flex-wrap lg:justify-evenly justify-center mt-8">

  

        @if (count($posts) >= 1)
      
          @foreach ($posts as $post)
              <div class="max-w-sm w-full rounded overflow-hidden shadow-lg transform hover:scale-105 duration-500 ">
                <img class="w-full bg-cover bg-center h-56 p-4" src="/images/img/{{$post->foto_frente}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$post->descripcion}}</div>
                <div class="flex-1 inline-flex items-center">
                  <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                  </svg>
                  <p><span class="text-gray-900 font-bold">{{$post->no_banos}}</span> Baños</p>
              </div>  
                  
                  <p class="text-gray-700 text-base">
                    Precio: ${{$post->precio}}
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <a href="{{route('info', $post->id)}}" class="text-teal-500 background-transparent font-bold uppercase px-3 py-1 text-xs outline-none focus:outline-none mr-1 mb-1 float-right">
                        Ver mas
                      </a>
                </div>  
              </div>
          @endforeach
        @endif 
      </div>
      <div class="mt-8">
        {{$posts->links()}}
      </div>
</div>






