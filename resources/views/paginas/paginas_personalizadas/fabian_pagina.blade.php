@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/fabian-delpino-abogado-especialista-en-desalojos-en-uruguay.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/fabian-delpino-abogado-experto-en-desalojo-uruguay-montevideo.jpg'/*--}}
{{--*/ $Titulo                = 'Abogado experto en desalojos en Uruguay | Fabian Delpino' /*--}} 
{{--*/ $DescriptionEtiqueta   = '¿Quieres desalojar a alguien?, ¿tu inquilino no se quiere ir?, ¿Te han ocupado tu casa sin tu permiso?, soy Fabian Delpino abogado experto en desalojos en Uruguay. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
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
  
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid"  style="padding: 0 30px;">
        <div class="row align-items-center justify-content-between">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{url()}}" class="nav-link">
                  <img style="height: 50px;" :src="empresa.img_logo_horizontal">

                </a></li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">               
                <li><a href="#sobre-mi" class="nav-link">¿Quienes somos?</a></li>
                <li><a href="#contact-section" class="nav-link">Contacto</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="nav-link">Administrar</a></li>
                  <li><a href="{{route('logout')}}" class="nav-link">Salir</a></li>
                @endif
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

@stop


@section('contenido')
   

     <div class="site-blocks-cover overlay " id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-8">
                <h1 v-if="se_muestra(empresa.home_titulo)" class="text-dark">¿Quieres desalojar a alguien?</h1>
                
                <p  class="lead text-dark"> ¿Tu inquilino no se quiere ir?  ¿Te ocuparon tu casa sin tu permiso?</p>
                
                <div class="flex-row-center">
                 <img src="{{$ImagenParaTaG}}" class="img-atencion-precios">
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos </a>
                 <img class="icono-uruguay-home" src="{{url()}}/imagenes/PaginasPersonalizadas/abogado-en-uruguay-experto-en-desalojo-bandera-uruguay.png" alt="Abogado en Uruguay experto en desalojo. Mi nombre es Fabian Delpino y me especializo en desalojos.">

                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Fabian Delpino"> 
      
       

    </div>  






  <div  class="site-section " id="sobre-mi">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Quienes somos  </h2>
          <p>Doctor en Derecho y Ciencias sociales, egresado de la Universidad de la República. Miembro del Colegio de Abogados del Uruguay.</p> 
          <p>Especialista y asesor legal con experiencia en materia de desalojos en todo el territorio
nacional.</p>  
          <p>Brindamos soluciones eficaces y rápidas, a los efectos de una pronta recuperación de
inmuebles arrendados u ocupados, para complacer así las necesidades de nuestros clientes de
forma segura y con la mayor celeridad posible, brindando un servicio personalizado y a la
medida de cada necesidad, con bajos aranceles.</p> 
          <p>La dedicación exclusiva y experiencia en materia de desalojos nos permiten el uso de
soluciones inteligentes y lógicas para recuperar el o los inmuebles que se encuentran en
manos de terceros u ocupantes con menos derechos sobre el bien.</p> 
          <p>Nuestro servicio integral crece permanentemente y ahora se extiende a todo el territorio
nacional, siendo el único estudio especializado en desalojos.</p> 
          <p>La ética, la responsabilidad y la búsqueda constante de la excelencia, son pilares
fundamentales de nuestro equipo en la práctica del derecho, posibilitando mediante un trato
personalizado y dedicado, un vínculo de confianza y satisfacción en la relación con nuestros
clientes.</p> 



         




          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/Empresa/home_imagen_queien_soy.jpg" alt="Soy abogado especializado en desalojo en Uruguay. Me llamo Fabian Delpino y te podré ayudar con tu caso sea cual sea. Experto en desalojo. Inquilinos (alquileres), ocupantes, y mucho más">
          </div>
        </div>
      </div>
    </div>








     




   
     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/PaginasPersonalizadas/fabian-delpino-abogado-uruguayo-que-se-especializa-es-desalojos.jpg" alt="Abogado especializado en desalojos dentro de Uruguay. Fabian Delpino" class="imagen-medio-de-web">
         <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto mb-4">¿Prestaste tu casa y no te la quieren devolver? ¿El inquilino es mal pagador? ¿Alquien te ocupó tu casa sin tu permiso?  no pierdas más tiempo actuá cuanto antes. Somos abogados expertos en desalojos dentro de Uruguay Montevideo  </div>
          <div class="flex-row-center">
                 <img src="{{$ImagenParaTaG}}" class="img-atencion-precios">
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos</a>
                 <img class="icono-uruguay-home" src="{{url()}}/imagenes/PaginasPersonalizadas/abogado-en-uruguay-experto-en-desalojo-bandera-uruguay.png" alt="Abogado en Uruguay experto en desalojo. Mi nombre es Fabian Delpino y me especializo en desalojos.">

                </div>
          
        </div>
      </div>


       <section v-if="blogs.length" class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Datos de interés</h2>
          </div>

           <blog-list-component v-for="blog in blogs" :empresa="empresa" :blog="blog" :key="blog.id" ></blog-list-component>

           

        </div>
      </div>
    </section>







    

    

   


   

    

    <section v-if="blogs.length" class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog</h2>
          </div>

           <blog-list-component v-for="blog in blogs" :empresa="empresa" :blog="blog" :key="blog.id" ></blog-list-component>

           

        </div>
      </div>
    </section>

@stop