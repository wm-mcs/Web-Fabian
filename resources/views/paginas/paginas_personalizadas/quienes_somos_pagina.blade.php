@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/Quienes_somos/Delpino-website-professionals-header-(hunters-race)2.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Quiénes somos | Delpino & Asociados ' /*--}} 
{{--*/ $DescriptionEtiqueta   = 'Delpino&amp;Asociados es una empresa de profesionales universitarios asociados  con la inquietud
       de dar origen a  un estudio jurídico pionero que brinde, de forma exclusiva, asesoramiento y
       defensa judicial en materia arrendaticia y de desalojos en todo el territorio nacional.
       Constituida por un equipo altamente calificado y devoto en la búsqueda de la excelencia y
       eficiencia. 
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
@include('paginas.paginas_personalizadas.nav')

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
           <a href="#Filosofia" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Filosofía</div></a>
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
     <p class="contiene-p-presentacion color-text-black mb-5">
              Delpino&Asociados, es una empresa de profesionales universitarios que comparten la inquietud de crear un estudio jurídico pionero,  que brinde de forma exclusiva, asesoramiento y defensa judicial en materia arrendaticia y de desalojos en todo el territorio nacional. Constituida por un equipo altamente calificado y devoto en la búsqueda de la excelencia y eficiencia.
     </p>
     <h3 class="contiene-h3-presentacion color-text-black">Staff</h3>           
      <p class="contiene-p-presentacion color-text-black mb-2">Dr. Fabián Delpino – Abogado Fundador/Director.</p> 
      <p class="contiene-p-presentacion color-text-black mb-2">Dra. María Inés Sánchez – Abogada asociada.</p> 
      <p class="contiene-p-presentacion color-text-black mb-2">Esc. Virginia González- Escribana asociada.</p> 
    </div>           
   </div>          
  </div>
</div>
</div>






{{-- Imagen con logo para mostrar por el medio --}}
<div class="contiene-todo-image-centrada">
 <div class="presentacion-imagen-paralax-quienes-somos"></div>
</div> 


{{-- Parte de filosofía empresarial --}}
<div  class="site-section position-relative presentacion-imagen-paralax-quienes-somos-libro" id="Filosofia">
  <div class="container">
    <div class="d-flex flex-column align-items-center align-items-lg-end">
      
    
    <div class="col-12 col-lg-6">
   

     <h1 class="contiene-h1-presentacion  color-text-black text-left">Filosfía empresarial</h1>
     <h3 class="contiene-h3-presentacion color-text-black">Compromiso</h3>
     <p class="contiene-p-presentacion color-text-black"> 
       El cliente es lo más importante para nosotros. La honestidad, equidad, ética profesional,
       responsabilidad, compromiso y excelencia son pilares fundamentales de nuestro equipo en la
       práctica del derecho; posibilitando mediante un trato personalizado y dedicado, un vínculo de
       confianza y satisfacción en la relación con nuestros clientes.
     </p>
     
     <div>
       <a href="{{route('get_contacto')}}" class="boton-contactar-presentacion">Contactar</a>
     </div>           

    </div>
    </div>
  </div>       
</div>
<div class="quienes-somos-cita-contenedor d-flex flex-column  align-items-center justify-content-center">
   <img src="{{url()}}/imagenes/PaginasPersonalizadas/Servicios/Logo-Delpino-oscuro.png" class="icono-logo-section-quienes-somos">
    <div class="container ">
     <div class="d-flex flex-column align-items-end">
        
          <div class=" col-11 col-lg-11 mb-3 text-right subtitulos-text color-text-white-2 font-italic"> 
          “Tu deber es luchar por el derecho: pero el día que encuentres en conflicto el derecho con la justicia, lucha por la justicia.”
          </div>
          <div class=" col-11 col-lg-11 text-right color-text-white-2">---Eduardo Couture.
          </div>
        
      </div>
    </div>
</div>


<div class="presentacion-imagen-paralax-quienes-somos-libro">
 
<img class="presentacion-imagen-paralax-quienes-somos-mujer" src="{{url()}}/imagenes/PaginasPersonalizadas/Quienes_somos/business-card-parallax-woman2.png">
 
  
</div>


    








     




   







    

    

   


   

    

    

@stop