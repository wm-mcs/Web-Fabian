

   

    var app = new Vue({
    el: '#app',    
    data:{
      empresa: {!! json_encode($Empresa) !!},
      blogs:   {!! json_encode($blogs) !!},

      

    },
    mounted: function mounted () {        

     


    },

    methods:{ 



    contacto_evento:function(){
      
      gtag('event', 'contacto');
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







































