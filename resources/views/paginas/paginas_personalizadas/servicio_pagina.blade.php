@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/Servicios/Delpino-website-lawshelf-header.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Servicios | Delpino & Asociados ' /*--}} 
{{--*/ $DescriptionEtiqueta   = 'Cubrimos todos los aspectos asociados a desalojos, arrendamientos y bienes raíces. 
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
         <h2 class="texto-titulo-slider">Servicios</h2>
         <p class="texto-detalle-slider">Cubrimos todos los aspectos asociados a desalojos, arrendamientos y bienes raíces.</p>
         <div class="contiene-botones-slider">
           <a href="#Abogacia" class="wraper-boton-slider link-to"><div class="boton-contactar-presentacion-blanco get_width_100">Abogacía</div></a> 
           <a href="#Escribania" class="wraper-boton-slider link-to"><div class="boton-contactar-presentacion-blanco get_width_100">Escribanía</div></a>
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
            <h2 class="contiene-h1-presentacion servicio-text-color-white">Derecho Civil</h2>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <a href="{{route('get_contacto')}}" class="boton-contactar-presentacion-blanco border-color-servicio-white servicio-text-color-white">Consultar</a>

          </div>
          <div class="contiene-cada-div-presentacion">


            <div class="Contiene-lista-de-servicios">
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Redacción
                </h3>
                <h4 class="contiene-cada-servicio-descripcion servicio-text-color-white">
                  Redacción y negociación de contratos de arrendamientos o comodato.
                </h4>
              </div>
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Intimación
                </h3>
                <h4 class="contiene-cada-servicio-descripcion servicio-text-color-white">
                  Intimación de pago de deuda.
                </h4>
              </div>
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Juicio
                </h3>
                <h4 class="contiene-cada-servicio-descripcion servicio-text-color-white">
                  Juicio ejecutivo para cobro de alquileres, gastos comunes y otras expensas.
                </h4>
              </div>
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Desalojos
                </h3>
                <ul class="contiene-ul-lista-sub-servicios">
                   <li class="contiene-cada-servicio-descripcion servicio-text-color-white contiene-servicio-li-list-icono">
                     Arrendatarios y subarrendatarios (casa-habitación, local comercial, alquileres por temporadas)
                   </li>
                   <li class="contiene-cada-servicio-descripcion servicio-text-color-white contiene-servicio-li-list-icono">
                     Comodatorios (con plazo, ocupantes precarios)
                   </li>
                   <li class="contiene-cada-servicio-descripcion servicio-text-color-white contiene-servicio-li-list-icono">
                     Huéspedes en pensiones
                   </li>
                   
                </ul>
                
              </div>
             
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Responsabilidad
                </h3>
                <h4 class="contiene-cada-servicio-descripcion servicio-text-color-white">
                  Responsabilidad contractual - Daños y perjuicios.
                </h4>
              </div>
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Asesoramiento
                </h3>
                <h4 class="contiene-cada-servicio-descripcion servicio-text-color-white">
                  Asesoramiento a inmobiliarias y pensiones.
                </h4>
              </div>
              
            </div>
           

          </div>
           
         </div>
          
        </div>
      </div>
    </div>


     <div  class="site-section BackgroundOscuro position-relative" id="Abogacia-DerechoPenal">

      <img src="{{url()}}/imagenes/PaginasPersonalizadas/Servicios/Logo-Delpino-oscuro.png" class="icono-logo-section-servicios">

      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h2 class="contiene-h1-presentacion servicio-text-color-white">Derecho Penal</h2>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <a href="{{route('get_contacto')}}" class="boton-contactar-presentacion-blanco border-color-servicio-white servicio-text-color-white">Consultar</a>

          </div>
          <div class="contiene-cada-div-presentacion">


            <div class="Contiene-lista-de-servicios">
              {{-- Servicio --}}
              <div class="contiene-cada-servicio border-color-servicio-oscuro-claro">
                <h3 class="contiene-cada-servicio-titulo servicio-text-color-white">
                  Delito de usurpación
                </h3>
                <h4 class="contiene-cada-servicio-descripcion servicio-text-color-white">
                  Asistencia legal a víctimas de delito de usurpación.
                </h4>
              </div>
             
              
            </div>
           

          </div>
           
         </div>
          
        </div>
      </div>
    </div>



     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
       <div class="presentacion-imagen-paralax-servicios"></div>
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