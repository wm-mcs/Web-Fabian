@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/Delpino-website-contactf-header-(thomas-lefebvre).jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Contacto | Delpino & Asociados ' /*--}} 
{{--*/ $DescriptionEtiqueta   = 'Puede comunicarse con nosotros directamente por teléfono, correo electrónico o rellenar el formulario de contacto. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_contacto') /*--}}

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
         <h2 class="texto-titulo-slider">Contacto</h2>
         <p class="texto-detalle-slider">Puede comunicarse con nosotros directamente por teléfono, correo electrónico o rellenar el formulario de contacto.</p>
         <div class="contiene-botones-slider">
           <a href="#Datos" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Datos</div></a> 
           <a href="#Formulario" class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Formulario</div></a>
         </div>
       </div>
      </div>
      
    </div>
   

   


    
    
    
  </div>
 
</div>

</div>
   

   






       <div  class="site-section BackgroundOscuro" id="Datos">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h2 class="contiene-h1-presentacion servicio-text-color-white">Datos de contacto</h2>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">

            <div class="contacto-pagina-contiene-iconos">
             <img src="{{url()}}/imagenes/PaginasPersonalizadas/Contacto-Delpino-Email.png" class="contacto-pagina-iconos">
             <img src="{{url()}}/imagenes/PaginasPersonalizadas/Contacto-Delpino-Tel.png" class="contacto-pagina-iconos">
              
            </div>
            

          </div>
          <div class="contiene-cada-div-presentacion">


           <div class="contiene-datos-contacto">
             <span class="subtitulos-text mb-2 servicio-text-color-white">@{{empresa.email}}</span>
             <span class="subtitulos-text mb-2 servicio-text-color-white">@{{empresa.celular}}</span>
           </div>
              
          
           

          </div>
           
         </div>
          
        </div>
      </div>
    </div>


    <contacto-component :empresa="empresa" seccion="seccion_contacto"></contacto-component>

   

    

    

@stop