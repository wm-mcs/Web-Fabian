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
                   problema:''
      
      },
      se_envio:false,
      mensaje_se_envio:'',
      errores:false,

      inquilino:'inquilino',
      ocupante:'ocupante',
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
      <p class="text-center text-white mb-5 helper-reduce-texto">Si quieres recibir mi ayuda me tienes que dar algunos datos para que te pueda decir cuánto va a demorar el proceso y cuanto te costará todo el trámite.</p>
    </div>
  </div>
  <div action="#" class="form">

    <div class="row mb-4">
      <div class="contacto-titulo-pregunta">¿Cuál es tu caso?</div>
      <div class="contacto-contiene-opciones">
        <label class="contacto-contiene-opcion-individual">
            <div  class="contacto-contiene-opcion-individual-titulo">Problemas con un inquilino</div>  
            <input type="radio" name="inquilino" value="inquilino" id="inquilino" v-model="data_enviar.inquilino_ocupante">      
        </label>
        <label class="contacto-contiene-opcion-individual">
            <div  class="contacto-contiene-opcion-individual-titulo">Problemas con un ocupante</div>  
            <input type="radio" name="ocupante" value="ocupante" id="ocupante" v-model="data_enviar.inquilino_ocupante">        
        </label>
      </div>
      

    </div>


     <div v-if="$root.comparar_si_son_iguales(inquilino, data_enviar.inquilino_ocupante)" class="row mb-4">
      <div class="contacto-titulo-pregunta">¿Cuál es la situación con el inquilino?</div>
      <div class="contacto-contiene-opciones">
        <label class="contacto-contiene-opcion-individual">
            <div  class="contacto-contiene-opcion-individual-titulo">Mal pagador</div>  
            <input type="radio" value="Mal pagador" v-model="data_enviar.problema">      
        </label>
        <label class="contacto-contiene-opcion-individual">
            <div  class="contacto-contiene-opcion-individual-titulo">Incumplimiento del plazo</div>  
            <input type="radio" value="Incumplimiento del plazo" v-model="data_enviar.problema">      
        </label>
       
        
      </div>
      

    </div>

    <div v-if="$root.comparar_si_son_iguales(ocupante, data_enviar.inquilino_ocupante)" class="row mb-4">
      <div class="contacto-titulo-pregunta">¿Cuál es la situación con el ocupante?</div>
      <div class="contacto-contiene-opciones">
        <label class="contacto-contiene-opcion-individual">
            <div  class="contacto-contiene-opcion-individual-titulo">Presté la casa y no me la devuelven</div>  
            <input type="radio" name="inquilino" value="Presté la casa y no me la devuelven" id="inquilino" v-model="data_enviar.problema">      
        </label>
        <label class="contacto-contiene-opcion-individual">
            <div  class="contacto-contiene-opcion-individual-titulo">Me ocuparon la casa</div>  
            <input type="radio" name="inquilino" value="Me ocuparon la casa" id="inquilino" v-model="data_enviar.problema">      
        </label>
        
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