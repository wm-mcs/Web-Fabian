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
                   inquilino_ocupante:'',
      
      },
      se_envio:false,
      mensaje_se_envio:'',
      errores:false
    }
}, 

methods:{

enviarMensaje:function(){
  var data = this.data_enviar;

  var url  = '/post_contacto_form';
  var vue  = this;

   axios.post(url,data).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {  
               gtag('event', 'contacto');
               vue.se_envio = true; 
               vue.mensaje_se_envio = data.Validacion_mensaje; 
               $.notify(response.data.Validacion_mensaje, "success");
            }
            else
            {
              $.notify(response.data.Validacion_mensaje, "error");
              vue.errores = data.Errores;
            }
           
           }).catch(function (error){

                     
            
           });

}

},
template:'
 <section class="site-section bg-primary" id="contact-section">
<div v-if="!se_envio" class="container">
  <div class="row">
    <div class="col-12 mb-5 position-relative">
      <h2 class="section-title text-center text-white mb-2">¿Quieres qué te ayude?</h2>
      <p class="text-center text-white mb-5">Si quieres recibir mi ayuda me tienes que dar algunos datos para que te pueda decir cuánto va a demorar el proceso y cuanto te costará todo el trámite.</p>
    </div>
  </div>
  <div action="#" class="form">

    <div class="row mb-4">
      <div class="contacto-titulo-pregunta">¿Cuál es tu caso?</div>
      <div class="contacto-contiene-opciones">
        <div class="contacto-contiene-opcion-individual">
            <div class="contacto-contiene-opcion-individual-titulo">Problemas con un inquilino</div>  
            <input type="radio" name="" value="inquilino" v-model="data_enviar.inquilino_ocupante">        
        </div>
        <div class="contacto-contiene-opcion-individual">
            <div class="contacto-contiene-opcion-individual-titulo">Problemas con un inquilino</div>  
            <input type="radio" name="" value="ocupante" v-model="data_enviar.inquilino_ocupante">        
        </div>
      </div>
      

    </div>
    <div class="row mb-4">
      
      <div class="form-group col-12">
        <input v-model="data_enviar.name" type="text" class="form-control" placeholder="Nombre">
      </div>
    </div>

    <div class="row mb-4">
      <div class="form-group col-12">
        <input v-model="data_enviar.email" type="email" class="form-control" placeholder="Email ">
      </div>
    </div>
   
    <div class="row mb-4">
      <div class="form-group col-12">
        <input type="text" v-model="data_enviar.mensaje" cols="30" rows="10" class="form-control" placeholder="Escribe">
      </div>
    </div>

    <div class="row">

      <div v-if="errores" >
        <div v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-6">
        <input type="submit" class="btn btn-dark" v-on:click="enviarMensaje" value="Enviar mensaje">
      </div>
    </div>
    
  </div>
</div>
<div v-else class="section-title text-center text-white mb-5">
  <h2 class="section-title text-center text-white mb-5">@{{mensaje_se_envio}}</h2>
</div>
    


</section>



'

});