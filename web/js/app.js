const app = new Vue({
  el: '#app',
  data: {
  	repuestos:[],
  	servicios:[],
  	total:0
  },
  computed: {  
      sumarTotal(){
        this.total = 0;
        for(p of this.repuestos) {
          this.total += parseInt(p.precio) || 0;
        };
        for(p of this.servicios) {
          this.total += parseInt(p.precio) || 0;
        };       
        return this.total;
      },  
   },
  created(){
    this.$http.get('index.php?r=trabajo/get-rusados').then(function(data){
      this.repuestos = data.body.slice(0,10);
    });
    this.$http.get('index.php?r=trabajo/get-susados').then(function(data){
      this.servicios = data.body.slice(0,10);
    });
  }
})