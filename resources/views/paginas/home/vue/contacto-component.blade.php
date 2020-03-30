Vue.component('contacto-component' ,
{
props:['empresa']
,  
data:function(){
    return {
     data_enviar:{ 
                   name:'',
                   email:'',
                   mensaje:'',
                   celular:'',
                   inquilino_ocupante:'',
                   problema:''
      
      },
      se_envio:false,
      mensaje_se_envio:'',
      errores:false,

      inquilino:'inquilino',
      ocupante:'ocupante',
      cargando:false,
      arrendador:'arrendador',
      arrendatario:'arrendatario',
      propietario:'propietario',
      ocupante:'ocupante'
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
   if(this.mostrar_campos && this.data_enviar.name != '' && this.data_enviar.email != '' && this.data_enviar.celular != '')
   {
     return true;
   }
   } 
  
},
template:'
 <section class="section-contacto-class" id="contact-section">
 <img class="section-contacto-img-background" src="{{url()}}/imagenes/PaginasPersonalizadas/Delpino-website-typo-contact.jpg">

<div class="contacto-absolut-wraper">
<div class="contacto-contenido-wraper">
<div v-if="!se_envio" class="container">
  <div class="row">
    <div class="col-12 mb-3 position-relative">
      <h2 class="contacto-titulo">Puedes consultar sin compromiso</h2>
      <p class="contacto-pregunta ">¿Cuál es tu caso?</p>
      <div class="contacto-contiene-opciones">
        
        <div v-model="arrendador" :class="style_clase(arrendador)" v-on:click="cambiar_opcion(arrendador)">Soy @{{arrendador}}</div>
        <div v-model="arrendatario" :class="style_clase(arrendatario)" v-on:click="cambiar_opcion(arrendatario)">Soy @{{arrendatario}}</div>
        <div v-model="propietario" :class="style_clase(propietario)" v-on:click="cambiar_opcion(propietario)">Soy @{{propietario}}</div>
        <div v-model="ocupante" :class="style_clase(ocupante)" v-on:click="cambiar_opcion(ocupante)">Soy @{{ocupante}}</div>
        
      </div>
    </div>
  </div>


  <div action="#" class="form">

   


    

   



    <div v-if="mostrar_campos" class="row mb-4">
      
      <div class="form-group col-sm-4">
        <input v-model="data_enviar.name" type="text" class="form-control" placeholder="Escribe tu nombre">
      </div>

      <div class="form-group col-sm-4">
        <input v-model="data_enviar.email" type="email" class="form-control" placeholder="Escribe tu email ">
      </div>

      <div class="form-group col-sm-4">
        <input v-model="data_enviar.celular"  type="text"  class="form-control" placeholder="Escribe tu celular">
      </div>
    </div>

   
    
   
    <div v-if="mostrar_campos" class="row mb-4">

      
      <div class="form-group col-sm-12">
        <input  v-model="data_enviar.mensaje" type="text" class="form-control" placeholder="Escribe un mensaje (opcional)">
      </div>
    </div>

    <div v-if="mostrar_boton"  class="row">

      <div v-if="errores" >
        <div v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-6">
        <div v-if="cargando" class="btn btn-dark"> <div class="cssload-tube-tunnel"></div></div>
        <div v-else class="boton-contacto-class"  v-on:click="enviarMensaje">Enviar</div>
        
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



'

});