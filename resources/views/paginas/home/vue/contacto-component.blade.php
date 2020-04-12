Vue.component('contacto-component' ,
{
props:['empresa','seccion']
,  
data:function(){
    return {
     data_enviar:{ 
                   name:'',
                   email:'',
                   mensaje:'',
                   celular:'',
                   departamento:'Montevideo',
                   inquilino_ocupante:'',
                   problema:''
      
      },
      se_envio:false,
      mensaje_se_envio:'',
      errores:false,

      inquilino:'inquilino',
      ocupante:'ocupante',
      cargando:false,
      arrendador:'Arrendador',
      arrendatario:'Arrendatario',
      propietario:'Propietario',
      ocupante:'Otros'
    }
}, 

methods:{

cambiar_opcion:function(valor){
  this.data_enviar.inquilino_ocupante = valor;
},
comparar_si_son_iguales:function(valor1,valor2){
  if(valor1 == valor2)
  {
    return true;
  }
  else{
    return false;
  }
},
style_clase:function(valor)
{
  if(this.comparar_si_son_iguales(valor,this.data_enviar.inquilino_ocupante)){
    return {
             'contacto-opciones-seleccionada': true,
                          'contacto-opciones': true
           };
  }
  else
  {
    return {
             'contacto-opciones-seleccionada': false,
                          'contacto-opciones': true
           };
  }
},

enviarMensaje:function(){
  var data = this.data_enviar;

  var url  = '/post_contacto_form';
  var vue  = this;

  this.cargando = true;

   axios.post(url,data).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {  
               this.cargando = false;
               gtag('event', 'contacto');
               vue.se_envio = true; 
               vue.mensaje_se_envio = data.Validacion_mensaje; 
               $.notify(response.data.Validacion_mensaje, "success",{ position:"right bottom" });
            }
            else
            {
              this.cargando = false;
              vue.errores = data.Errores;
              $.notify(response.data.Validacion_mensaje, "error",{ position:"right bottom" });
              
            }
           
           }).catch(function (error){

                     
            
           });

}

},
computed:{


  eligio_inquilino_ocupante:function(){
    if(this.data_enviar.inquilino_ocupante != '')
    {
      return true;
    }
  },
  eligio_problema:function(){
    if(this.data_enviar.problema != '')
    {
      return true;
    }
   }, 

   mostrar_campos:function(){
    if(this.eligio_inquilino_ocupante )
    {
       return true;
    }
   },
   mostrar_boton:function(){
   if( this.data_enviar.name != '' && this.data_enviar.email != '' && this.data_enviar.mensaje != '')
   {
     return true;
   }
   },
   es_home:function(){
   if(this.seccion === 'seccion_home')
   {
     return true;
   }
   else
   {
    return false;
   }
   } 
  
},
template:'
<span>
<section v-if="es_home" class="section-contacto-class contacto-imagen-home" id="contact-section">
<div class="contacto-absolut-wraper">
<div class="contacto-contenido-wraper">
<div v-if="!se_envio" class="container">
  <div class="row">
    <div class="col-12 mb-3 position-relative">
      <h2 class="contacto-titulo color-text-white">Puede consultar sin compromiso</h2>
      <p class="contacto-pregunta color-text-white">¿Cuál es su situación?</p>
      <div class="contacto-contiene-opciones">
        <div  :class="style_clase(arrendador)" v-on:click="cambiar_opcion(arrendador)"> @{{arrendador}}</div>
        <div  :class="style_clase(arrendatario)" v-on:click="cambiar_opcion(arrendatario)"> @{{arrendatario}}</div>
        <div  :class="style_clase(propietario)" v-on:click="cambiar_opcion(propietario)"> @{{propietario}}</div>
        <div  :class="style_clase(ocupante)" v-on:click="cambiar_opcion(ocupante)"> @{{ocupante}}</div>
      </div>
    </div>
  </div>


  <div action="#" class="form">
    <div  class="row mb-2">
      <div class="form-group  col-sm-6">
        <input v-model="data_enviar.name" type="text" class="form-control" placeholder="Nombre completo">
      </div>
      <div class="form-group  col-sm-6">
        <input v-model="data_enviar.email" type="email" class="form-control" placeholder="Email">
      </div>
    </div>
   
    <div  class="row mb-4">      
      <div class="form-group col-sm-12">
        <input  v-model="data_enviar.mensaje" type="text" class="form-control" placeholder="Mensaje">
      </div>
    </div>
    <div v-if="mostrar_boton"  class="row">
      <div v-if="errores" >
        <div v-for="error in errores">@{{error}}</div>
      </div>
      <div  class="col-md-6">
        <div v-if="cargando" class="btn btn-dark"> <div class="cssload-tube-tunnel"></div></div>
        <div v-else class="boton-contacto-class" v-on:click="enviarMensaje">Enviar</div>
      </div>
    </div>
    <div v-else class="row">
      <div  class="col-md-6">
         <div class="boton-contacto-class-disabled" >Enviar</div>
      </div>
    </div>
  </div>
</div>
<div v-else class="section-title text-center text-white mb-5">
  <h2 class="section-title text-center text-white mb-5">@{{mensaje_se_envio}}</h2>
</div>
    
</div>
</div>
</section>
<section v-else class="section-contacto-class contacto-imagen-contacto" id="Formulario">
<div class="contacto-absolut-wraper">
<div class="contacto-contenido-wraper">
<div v-if="!se_envio" class="container">
  <div class="row">
    <div class="col-12 mb-3 position-relative">
      <h2 class="contacto-titulo color-text-black">Formulario de contacto</h2>
      <p class="contacto-pregunta color-text-black">Complete todos los campos del formulario y al recibir su consulta, nos comunicaremos a la brevedad.</p>
    </div>
  </div>


  <div action="#" class="form-2">
    <div  class="row mb-2">
      <div class="form-group col-6  col-sm-6">
        <input v-model="data_enviar.name" type="text" class="form-control inut-contacto-black" placeholder="Nombre completo">
      </div>
      <div class="form-group  col-6  col-sm-6">
        <input v-model="data_enviar.email" type="email" class="form-control inut-contacto-black" placeholder="Email">
      </div>
      <div class="form-group col-6  col-sm-6">
        <input v-model="data_enviar.celular" type="text" class="form-control inut-contacto-black"  placeholder="Celular">
      </div>
      <div class="form-group col-6  col-sm-6">
        <input v-model="data_enviar.departamento" type="text" class="form-control inut-contacto-black" placeholder="Departamento">
      </div>
      
    </div>
   
    <div  class="row mb-4">      
      <div class="form-group col-sm-12">
        <input  v-model="data_enviar.mensaje" type="text" class="form-control inut-contacto-black" placeholder="Mensaje">
      </div>
    </div>
    <div v-if="mostrar_boton"  class="row">
      <div v-if="errores" >
        <div v-for="error in errores">@{{error}}</div>
      </div>
      <div  class="col-md-6">
        <div v-if="cargando" class="btn btn-dark"> <div class="cssload-tube-tunnel"></div></div>
        <div v-else class="boton-contactar-presentacion" v-on:click="enviarMensaje">Enviar</div>
      </div>
    </div>
    <div v-else class="row">
      <div  class="col-md-6">
         <div class="boton-contactar-presentacion disabled" >Enviar</div>
      </div>
    </div>
  </div>
</div>
<div v-else class="section-title text-center text-white mb-5">
  <h2 class="section-title text-center text-white mb-5">@{{mensaje_se_envio}}</h2>
</div>
    
</div>
</div>
</section>
  
</section>

   
      
               
     

      </span>



'

});