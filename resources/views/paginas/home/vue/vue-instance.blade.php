

   

    var app = new Vue({
    el: '#app',    
    data:{
      empresa: {!! json_encode($Empresa) !!},
      blogs:   {!! json_encode($blogs) !!},
      cargando:false,
      scrolled:false,
      windowWidth: window.innerWidth,

      

    },
mounted: function mounted () {        

 this.$nextTick(() => {
    window.addEventListener('resize', () => {
      this.windowWidth = window.innerWidth
    });
  })


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
    handleScroll: function() {
        if(this.scrolled == false)
        {
          this.scrolled = window.scrollY > 0;
          
        }        
      },   
    
},
computed:{
  mostrar_logo_nav:function(){
  if(this.scrolled > 0)
    return true;
  }

},
 watch: {
    windowHeight(newHeight, oldHeight) {
     
    }
    },  

     
      created () {
        window.addEventListener('scroll', this.handleScroll);
      },
      destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
      }

}

     

   

   );







































