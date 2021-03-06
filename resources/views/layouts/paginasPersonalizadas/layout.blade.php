<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oranienbaum&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">  
    <link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}"> 

    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/credo.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    @yield('og-tags')
    @yield('data-estructurada')

    <meta name="Description" CONTENT="@yield('MetaContent')">      
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">
    @include('paginas.comunes.analytics')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div id="app" class="site-wrap">
  <div v-if="cargando" class="contiene-cargador">
    <div class="cssload-container">
      <div class="cssload-tube-tunnel"></div>
    </div>
  </div>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @yield('header')
   
   

    @yield('contenido')  


   



    



   



    <footer class="site-section  contenedor-footer">
      <div class="sub-contenedor-footer container">
        
      


          <div class="contenedor-columna-footer">
                <h3 class="titulo-columna-footer">Contacto directo</h3>   

                  <div class="contiene-lena-columna" v-if="se_muestra(empresa.telefono)">
                   <div class="contiene-lena-columna-icono">
                     <i class="fas fa-phone-square"></i>
                    </div>
                   <span class="contiene-lena-columna-texto"> @{{empresa.telefono}}</span>  
                  </div>
                  <div class="contiene-lena-columna" v-if="se_muestra(empresa.celular)" >
                    <div class="contiene-lena-columna-icono">
                      <i class="fas fa-mobile-alt"></i>
                    </div>
                    <span class="contiene-lena-columna-texto">(+598) @{{empresa.celular}}</span>  
                    
                  </div>
                  <div class="contiene-lena-columna" v-if="se_muestra(empresa.direccion)">
                    <div class="contiene-lena-columna-icono"><i class="fas fa-map-marker-alt"></i></div>
                    <span class="contiene-lena-columna-texto">@{{empresa.direccion}}</span>  
                    
                  </div>
                  <div class="contiene-lena-columna" v-if="se_muestra(empresa.horarios)">
                    <div class="contiene-lena-columna-icono"><i class="fas far fa-clock"></i></div>
                    <span class="contiene-lena-columna-texto">@{{empresa.horarios}}</span>  
                    
                  </div>
                  <div class="contiene-lena-columna" v-if="se_muestra(empresa.email)">
                    <div class="contiene-lena-columna-icono"><i class="fas fa-envelope"></i></div>
                    <span class="contiene-lena-columna-texto">@{{empresa.email}}</span> 
                  </div>
            </div>
             {{-- <div class="contenedor-columna-footer">
                <h3 class="titulo-columna-footer">Rutas de interés</h3>

                  <div class="contiene-lena-columna" >
                   <a href="{{route('get_servicios')}}" class="contiene-lena-columna-texto"> Servicios</a>  
                  </div>
                  <div class="contiene-lena-columna" >
                   <a href="{{route('get_contacto')}}" class="contiene-lena-columna-texto"> Contacto</a>  
                  </div>
                  @if(Auth::guest())
                  <div class="contiene-lena-columna" >
                   <a href="{{route('auth_login_get')}}" class="contiene-lena-columna-texto"> Iniciar sesión</a>  
                  </div>
                  @else
                  <div class="contiene-lena-columna" >
                   <a href="{{route('get_datos_corporativos')}}" class="contiene-lena-columna-texto">Administrar</a>  
                  </div>
                   <div class="contiene-lena-columna" >
                   <a href="{{route('logout')}}" class="contiene-lena-columna-texto">Salir</a>  
                  </div>
                   @endif
              </div>   
 --}}


                
        
               
             
           
          
          
          <div class="contenedor-columna-footer">
            <h3 class="titulo-columna-footer">Redes sociales</h3>
            <div class="contiene-lena-columna" v-if="se_muestra(empresa.twitter_url)">
                <div class="contiene-lena-columna-icono">
                  <span class="icon-twitter"></span>
                </div>
                <a :href="empresa.twitter_url" class="contiene-lena-columna-texto footer-link"> Twitter</a> 
            </div>
            <div class="contiene-lena-columna" v-if="se_muestra(empresa.facebook_url)">
                <div class="contiene-lena-columna-icono">
                  <span class="icon-facebook"></span>
                </div>
                <a :href="empresa.facebook_url" class="contiene-lena-columna-texto footer-link"> Facebook</a> 
            </div>
            <div class="contiene-lena-columna" v-if="se_muestra(empresa.instagram_url)">
                <div class="contiene-lena-columna-icono">
                  <span class="icon-instagram"></span>
                </div>
                <a :href="empresa.instagram_url" class="contiene-lena-columna-texto footer-link"> Instagram</a> 
            </div>
            <div class="contiene-lena-columna" v-if="se_muestra(empresa.youtube_url)">
                <div class="contiene-lena-columna-icono">
                  <span class="icon-youtube"></span>
                </div>
                <a :href="empresa.youtube_url" class="contiene-lena-columna-texto footer-link"> Youtube</a> 
            </div>
            <div class="contiene-lena-columna" v-if="se_muestra(empresa.linkedin_url)">
                <div class="contiene-lena-columna-icono">
                  <span class="icon-linkedin"></span>
                </div>
                <a :href="empresa.linkedin_url" class="contiene-lena-columna-texto footer-link"> LinkedIn</a> 
            </div>
            <div class="contiene-lena-columna" v-if="se_muestra(empresa.Whatsapp_cel)">
                <div class="contiene-lena-columna-icono">
                  <i class="fab fa-whatsapp"></i>
                </div>
                <a :href="empresa.link_whatsapp_send" class="contiene-lena-columna-texto footer-link"> Whatsapp</a> 
            </div>
           
            
          </div>

           <div class="contenedor-columna-footer">
            <h3 class="titulo-columna-footer">Créditos</h3>


            <div class="footer-parrafo-test">
              Identidad Corporativa, Comunicación Visual y Diseño Web de Interfaz:<br>
              Ernesto Calvo | <a class="footer-link text-bold" href="https://www.instagram.com/simbionte.creativo">Simbionte</a>
            </div>
            <div class="footer-parrafo-test">
              Coding y Desarrollo Web:<br>
              Mauricio Costanzo | <a class="footer-link text-bold" href="https://mauricio.mwebs.com.uy/">Mwebs</a>
            </div>
            
           
          </div>
           <div class="contenedor-columna-footer">
            <h3 class="titulo-columna-footer">Fotografía</h3>
            <div class="footer-parrafo-test">
              Alex Knight, Aaron Burden, Beatriz Perez Moya, Bill Oxford, Clarisse Meyer, Helloquence, Hunters Race, Jan Vašek, Razvan Chisu, Patrick Fore, Thomas Lefebvre.
            </div>
           
          </div>
        
        @yield('iconos-compartir')
       
      </div>
    </footer>
    <div class="Footer-final-container">
      <div class="container">
        <div class="row">
          <div class="col flex-row-center flex-justifice-space-around">
            <div class="Footer-final-text">2020 © Delpino&Asociados. Todos los derechos reservados.</div>
          </div>
          <div class="col-md-6 flex-row-center flex-justifice-space-around">
            <div class="flex-row-center ">
              <a href="https://mauricio.mwebs.com.uy/" class="mr-lg-3"> <img style="height:80px; width: auto; " src="{{url()}}/imagenes/PaginasPersonalizadas/footer-mwebs-logo-A.png"></a>
              <a href="https://www.instagram.com/simbionte.creativo"> <img  style="height:80px; width: auto; "src="{{url()}}/imagenes/PaginasPersonalizadas/footer-simbionte-logo-A.png"></a>
            </div>
          </div>
          <div class="col flex-row-center flex-justifice-space-around">
            <div class="Footer-final-text">Montevideo, Uruguay.</div>
          </div>
        </div>
      </div>
      
    </div>

  </div> 

  <!-- .site-wrap -->

 <script src="{{url()}}{{ elixir('js/credo.js')}} " ></script>   


  @if(Auth::guest())
             <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

  <script type="text/javascript">
    @yield('vue')  
  </script>

  
  </body>
</html> 