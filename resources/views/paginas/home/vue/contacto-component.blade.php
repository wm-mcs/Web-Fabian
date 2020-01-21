Vue.component('contacto-component' ,
{
props:['empresa']
,  
data:function(){
    return {
      name:'',
      email:'',
      mensaje:'',
      se_envio:false,
      mensaje_se_envio:'',
      errores:false
    }
}, 

methods:{

enviarMensaje:function(){
  var data = {
                name:this.name,
                email:this.email,
                mensaje:this.mensaje
             };

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

});