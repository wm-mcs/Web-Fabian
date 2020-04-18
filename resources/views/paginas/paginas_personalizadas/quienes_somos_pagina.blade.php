@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/Quienes_somos/Delpino-website-professionals-header-(hunters-race)2.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Quiénes somos | Delpino & Asociados ' /*--}} 
{{--*/ $DescriptionEtiqueta   = '¿Quieres desalojar a alguien?, ¿tu inquilino no se quiere ir?, ¿Te han ocupado tu casa sin tu permiso?, soy Fabian Delpino abogado experto en desalojos en Uruguay. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_quienes_somos') /*--}}

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">


@stop 


@section('data-estructurada')

 <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{$UrlDeLaPagina}}",
            "name": "{{$Titulo}}"
            }
          }          
         ]
        }
</script>


@stop




@section('title')
   {{$Titulo}}
@stop


@section('MetaContent')
      {{$DescriptionEtiqueta}}
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')
{{$PalabrasClaves}}
@stop


@section('vue')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" id="header">

      <div class="container-fluid"  style="padding: 0 30px; max-width:1650px;">
        <div class="row align-items-center justify-content-between">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu  mr-auto ">
                <li>
                    <a v-show="mostrar_logo_nav" href="{{url()}}" class="nav-link">
                      <img v-if="mostrar_para_grande" style="height: 30px;" :src="empresa.img_logo_horizontal_blanco">
                      <img v-else style="height: 40px;" :src="empresa.img_logo_horizontal_v2_blanco">
                      
                    </a>
                </li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">  
                <li><a href="{{url()}}" class="nav-link">INICIO</a></li>             
                <li><a href="#sobre-mi" class="nav-link">QUIÉNES SOMOS</a></li>
                <li><a href="{{route('get_servicios')}}" class="nav-link">SERVICIOS</a></li> 
                <li><a href="{{route('get_contacto')}}" class="nav-link">CONTACTO</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="nav-link">ADMINISTRAR</a></li>
                  <li><a href="{{route('logout')}}" class="nav-link">SALIR</a></li>
                @endif
              </ul>
            </nav>


            <div class="flex-row-center d-lg-none" style="position: relative; top: 3px;">
              <a v-show="mostrar_logo_nav" href="{{url()}}" class="inicio-class-al-lado-de-boton">INICIO</a>
              <a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>

            </div>

          </div>

        </div>
      </div>
      
    </header>

@stop


@section('contenido')

<div class="get_width_100">
  


  <div id="carouselExampleIndicators"  class="carousel slide auto home_slider" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active Slider-contenedor">
      <img class="post-img-slider-size Slider-img"  src="{{$ImagenPortada}}" alt="Fabian Delpino"> 
      <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
      <div class="Slider-wraper-contenido-de-textos-y-botones ">
       <div class="Slider-contenido-de-textos-y-botones">
         <h2 class="texto-titulo-slider">Quiénes somos</h2>
         <p class="texto-detalle-slider">Acerca de nosotros y nuestros valores.</p>
         <div class="contiene-botones-slider">
           <a href="#SeccionA" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Orígenes</div></a> 
           <a href="#SeccionB" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Filosofía</div></a>
         </div>
       </div>
      </div>
      
    </div>
   

   


    
    
    
  </div>
 
</div>

</div>
   

   






      <div  class="site-section" id="SeccionA">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h2 class="contiene-h1-presentacion color-text-black">La empresa</h2>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <img class="quienes-somos-logo" src="{{url()}}/imagenes/PaginasPersonalizadas/Quienes_somos/Logo-Delpino-ISO.png">
          </div>
          <div class="contiene-cada-div-presentacion">
           <h3 class="contiene-h3-presentacion color-text-black">Orígenes</h3>
           <p class="contiene-p-presentacion color-text-black">
             Somos una empresa joven fundada por el Doctor en Derecho y Ciencias Sociales Fabián Delpino; una asociación de formados profesionales que, individualmente, tienen una trayectoria de años dentro de la especialización del rubro.
           </p>

           <h3 class="contiene-h3-presentacion color-text-black">Leit-motif</h3>
           <p class="contiene-p-presentacion color-text-black">
             Somos una empresa joven fundada por el Doctor en Derecho y Ciencias Sociales Fabián Delpino; una asociación de formados profesionales que, individualmente, tienen una trayectoria de años dentro de la especialización del rubro.
           </p>


          
           

          </div>
           
         </div>
          
        </div>
      </div>
    </div>






     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
       <div class="presentacion-imagen-paralax-quienes-somos"></div>
      </div> 



        <div  class="site-section position-relative" id="Escribania">
          <img src="{{url()}}/imagenes/PaginasPersonalizadas/Servicios/Logo-Delpino-claro.png" class="icono-logo-section-servicios">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h1 class="contiene-h1-presentacion  color-text-black">Escribanía</h1>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <a href="{{route('get_contacto')}}" class="boton-contactar-presentacion">Contactar</a>

          </div>
          <div class="contiene-cada-div-presentacion">

             <div class="Contiene-lista-de-servicios">

              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Compra / Venta
                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Compra-Venta de inmuebles.
                </h4>
              </div>
               {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Promesa
                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Promesa de Compra-Venta de inmuebles.
                </h4>
              </div>
              
               {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Hipotecas
                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Redacción de préstamos hipotecarios con Bancos o entre particulares para la adquisición de bienes inmuebles como para construcción o reforma de los mismos.

                </h4>
              </div>
               {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Reglamento de copropiedad
                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Redacción de reglamentos de copropiedad. Asesoramiento jurídico.

                </h4>
              </div>
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Certificados notariales 
                </h3>
                 <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Para presentar ante ANDA, Contaduría General de la Nación, Porto Seguro, Ministerio de Vivienda, Bancos, Organismos Públicos y Oficinas Privadas.
                </h4>  
              </div>
              
               {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Testimonio
                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Testimonio por exhibición de documentos públicos y/o privados.

                </h4>
              </div>
              
               {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Poderes
                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  Redacción de poderes generales y especiales.
                </h4>
              </div>
              
               {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo color-text-black">
                  Otros servicios

                </h3>
                <h4 class="contiene-cada-servicio-descripcion color-text-black">
                  No dude en consultar respecto a otros servicios de escribanía.

                </h4>
              </div>


             </div>














          </div>
           
         </div>
          
        </div>
      </div>
    </div>


    








     




   







    

    

   


   

    

    

@stop