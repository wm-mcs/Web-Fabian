@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/fabian-delpino-abogado-especialista-en-desalojos-en-uruguay.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Delpino & Asociados | Asistencia en arrendamientos y Recuperación de inmuebles ' /*--}} 
{{--*/ $DescriptionEtiqueta   = 'Estudio de abogados especializados en desalojos; asistencia a arrendadores, arrendatarios, y asesoramiento a pensiones e inmobiliarias en Uruguay.  ' /*--}}
{{--*/ $PalabrasClaves        = 'desalojos, mal pagador, arrendador, arrendatario, inmobiliaria, pensión, comodato, íntimación, abogado, escribano' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}

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
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    
    
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active Slider-contenedor">
      <img class="post-img-slider-size Slider-img"  src="{{$ImagenPortada}}" alt="Fabian Delpino"> 
      <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
      <div class="Slider-wraper-contenido-de-textos-y-botones ">
       <div class="Slider-contenido-de-textos-y-botones">
         <h2 class="texto-titulo-slider">Asistencia en arrendamientos</h2>
         <div class="contiene-botones-slider">
           <a href="#Arrendador" class="wraper-boton-slider link-to"><div class="boton-contactar-presentacion-blanco get_width_100">Arrendador</div></a> 
           <a href="#section-4" class="wraper-boton-slider link-to"><div class="boton-contactar-presentacion-blanco get_width_100">Arrendatario</div></a>
         </div>
       </div>
      </div>
      
    </div>
     <div class="carousel-item  Slider-contenedor">
      <img class="post-img-slider-size Slider-img"  src="{{url()}}/imagenes/PaginasPersonalizadas/Delpino-website-buildings-header.jpg" alt="Fabian Delpino"> 
      <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
      <div class="Slider-wraper-contenido-de-textos-y-botones ">
       <div class="Slider-contenido-de-textos-y-botones">
         <h2 class="texto-titulo-slider">Asesoramiento a inmobiliarias y pensiones</h2>
         {{-- <p class="texto-detalle-slider">No hay tiempo que perder, podemos ayudarte.</p> --}}
         <a href="{{route('get_contacto')}}" class="contiene-botones-slider">
           <span class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Contactar</div></span> 
           
         </a>
       </div>
      </div>
    </div>

   

    <div class="carousel-item  Slider-contenedor">
      <img class="post-img-slider-size Slider-img"  src="{{url()}}/imagenes/PaginasPersonalizadas/Delpino-website-strategy-header.jpg" alt="Fabian Delpino"> 
      <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
      <div class="Slider-wraper-contenido-de-textos-y-botones ">
       <div class="Slider-contenido-de-textos-y-botones">
         <h2 class="texto-titulo-slider">¿Recibió una orden de desalojo?</h2>
         <p class="texto-detalle-slider">No hay tiempo que perder, debemos actuar estratégicamente y cuanto antes.</p>
         <a href="#contact-section" class="contiene-botones-slider link-to">
           <span class="wraper-boton-slider"><div class="boton-contactar-presentacion-blanco get_width_100">Ayuda</div></span> 
           
         </a>
       </div>
      </div>
    </div>

   

    
    
    
  </div>
 
</div>

</div>
   

   






  <div  class="site-section " id="Arrendador">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h1 class="contiene-h1-presentacion  color-text-black">Recuperación de inmuebles</h1>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <a href="#contact-section" class="boton-contactar-presentacion">Contactar</a>

          </div>
          <div class="contiene-cada-div-presentacion">
            <p class="contiene-p-presentacion color-text-black">
              Brindamos <strong>soluciones eficaces</strong>, a los efectos de una pronta recuperación de inmuebles arrendados u ocupados, para complacer así las necesidades de nuestros clientes de forma segura y con la mayor celeridad posible. Ofrecemos un servicio personalizado, de <strong>aranceles accesibles</strong>, a medida de cada necesidad.
            </p>
            <p class="contiene-p-presentacion color-text-black">
              Para ver un listado completo de nuestros servicios  <a href="{{route('get_servicios')}}" class="font-italic text-underline">haga click aquí</a>.
            </p>

          </div>
           
         </div>
          
        </div>
      </div>
    </div>


     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
       <div class="presentacion-imagen-paralax"></div>
         {{-- <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez"> --}}
       
      </div> 
      


      <div  class="site-section BackgroundOscuro" id="section-4">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h2 class="contiene-h1-presentacion servicio-text-color-white">Patrocinio
de inquilinos</h2>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <a href="#contact-section" class="boton-contactar-presentacion-blanco link-to border-color-servicio-white servicio-text-color-white">Contactar</a>

          </div>
          <div class="contiene-cada-div-presentacion">
            <p class="contiene-p-presentacion servicio-text-color-white">
              No dude en contactarnos si necesita asistencia relacionada a cualquier conflicto que esté experimentando con su arrendador. Si ha recibido una orden de desalojo, debería saber que, desde que fue notificado , tiene un plazo de <strong>10 días hábiles</strong>  para presentar su defensa. Si ya transcurrió dicho plazo, no desespere, aún podemos ayudarle.
            </p>

          </div>
           
         </div>
          
        </div>
      </div>
    </div>



    <contacto-component :empresa="empresa" seccion="seccion_home"></contacto-component>
    

    {{-- Alcance Nacional --}}
    <div  class="site-section py-4  presentacion-imagen-secundaria-paralax-pais" id="sobre-mi">
      <div class="presentacion-imagen-secundaria-paralax-pais-capa">
          <div class="contiene-alcance-nacional-texto">
            <h2 class="contiene-h1-presentacion color-text-black-2 text-left" style="margin-bottom: 30px;">Alcance nacional</h2>
            
            <p class="contiene-p-presentacion color-text-black-2">Nuestro servicio integral crece permanentemente y ahora se extiende a todo el territorio nacional, siendo el único estudio especializado en desalojos.
            </p> 
           </div>
       </div>
    </div>


   

    








     




   







    

    

   


   

    

    

@stop