

   

    var app = new Vue({
    el: '#app',    
    data:{
      empresa: {!! json_encode($Empresa) !!},
      blogs:   {!! json_encode($blogs) !!},
      cargando:false,

      

    },
    mounted: function mounted () {        

     


    },

    methods:{ 



    contacto_evento:function(){
      
      gtag('event', 'contacto');
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



    se_muestra:function(valor){

    if(valor == '' || valor == null || valor == 'no')
    {
      return false;
    }
    else
    {
      return true;
    }
    },   
    
    }

     

   

   });







































