<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CVC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
      
        <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
        
        @livewireStyles
        
    </head>
    <body>
         
      @livewire('nav')
      
      
      
    <div class="container mx-auto px-4">


        
          <div class=" mt-4 text-teal-500">
            &nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;{{$status}} &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <i class="far fa-envelope"></i>&nbsp;&nbsp;{{$post->tipo_propiedad}}</span><span class="right"><i class="fa fa-gift"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; {{$muni->name}}&nbsp;  &nbsp;&nbsp;</span>
            <div class="float-right">
            <a href="/">Regresar</a>
            </div>
          </div>
        
          <div class="mt-2">
            <div class="py-12 bg-white">
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                  <h2 class="text-base text-teal-500 font-semibold tracking-wide uppercase">Detalles de: </h2>
                  <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    $ {{$post->precio}}
                  </p>
                  <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                      {{$post->long_descripcion}}
                  </p>
                </div>
            
                <div class="mt-10">
                  <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="flex">
                      <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md">
                          <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                        </svg>
                        </div>
                      </div>
                      <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                          Numero de baños {{$post->no_banos}}
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                          Informacion banos
                        </dd>
                      </div>
                    </div>
            
                    <div class="flex">
                      <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md">
                          <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                        </svg>
                        </div>
                      </div>
                      <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                          Numero de recamaras 
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                          Información recamras
                        </dd>
                      </div>
                    </div>
            
                    <div class="flex">
                      <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md">
                          <img src="/images/meter.png" alt="">
                        </div>
                      </div>
                      <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                          Tamaño de construcción {{$post->m2construccion}} metros cuadrados
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                      </div>
                    </div>
            
                    <div class="flex">
                      <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md">
                         <img src="/images/floors.svg" alt="">
                        </div>
                      </div>
                      <div class="ml-4">
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                          Numero de niveles {{$post->no_niveles}}
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                          Lorem ipsum, dolor sit amet consectetur adipilit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                      </div>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
          </div>
      
          <div class="gallery mt-2">
            <a href="/storage/cover_images/{{$docu->foto_frente}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->foto_frente}}" alt=""></a>
            <a href="/storage/cover_images/{{$docu->foto_calle}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->foto_calle}}" alt=""></a>
            <a href="/storage/cover_images/{{$docu->foto_interior}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->foto_interior}}" alt=""></a> 
            <a href="/storage/cover_images/{{$docu->foto_fondo}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->foto_fondo}}" alt=""></a>
            <a href="/storage/cover_images/{{$docu->foto_interior}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->foto_interior}}" alt=""></a>
            <a href="/storage/cover_images/{{$docu->foto_nivel}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->foto_nivel}}" alt=""></a>
            <a href="/storage/cover_images/{{$docu->recibo_predial}}" data-lightbox="mygallery"><img src="/storage/cover_images/{{$docu->recibo_predial}}" alt=""></a>

      </div>
     
    </div>
      


      @livewire('footer')
     
      
         


      
        
              
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      @livewireScripts           
    </body>
</html>

