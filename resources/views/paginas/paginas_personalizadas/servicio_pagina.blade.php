@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/Servicios/Delpino-website-lawshelf-header.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Servicios | Delpino & Asociados ' /*--}} 
{{--*/ $DescriptionEtiqueta   = '¿Quieres desalojar a alguien?, ¿tu inquilino no se quiere ir?, ¿Te han ocupado tu casa sin tu permiso?, soy Fabian Delpino abogado experto en desalojos en Uruguay. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_servicios') /*--}}

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
         <h2 class="texto-titulo-slider">Servicios</h2>
         <p class="texto-detalle-slider">Cubrimos todos los aspectos asociados a desalojos, arrendamientos y bienes raíces.</p>
         <div class="contiene-botones-slider">
           <a href="#Abogacia" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Abogacía</div></a> 
           <a href="#Escribania" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Escribanía</div></a>
         </div>
       </div>
      </div>
      
    </div>
   

   


    
    
    
  </div>
 
</div>

</div>
   

   






       <div  class="site-section BackgroundOscuro" id="Abogacia">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h2 class="contiene-h1-presentacion color-text-white">Derecho civil</h2>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <a href="#contact-section" class="boton-contactar-presentacion-blanco">Consultar</a>

          </div>
          <div class="contiene-cada-div-presentacion">
            <p class="contiene-p-presentacion color-text-white">
              No dude en contactarnos si necesita asistencia relacionada a cualquier conflicto que esté experimentando con su arrendador. Si ha recibido una orden de desalojo, debería saber que, desde que fue notificado , tiene un plazo de <strong>10 días hábiles</strong>  para presentar su defensa. Si ya transcurrió dicho plazo, no desespere, aún podemos ayudarle.
            </p>

          </div>
           
         </div>
          
        </div>
      </div>
    </div>


    








     




   







    

    

   


   

    

    

@stop