const app = new Vue({
  el: '#app',
  data: {
    titulo: 'PRODUCTOS',
    texto: '',
    productos: this.created,
    cantidad:[],
    pedido:[],
    nuevaproducto: '',
    total: 0,
    fecha:[]
  },
   methods: {
      hoyFecha(){
          var hoy = new Date();
              var dd = hoy.getDate();
              var mm = hoy.getMonth()+1;
              var yyyy = hoy.getFullYear();
              
              dd = addZero(dd);
              mm = addZero(mm);
       
              return dd+'/'+mm+'/'+yyyy;
      },
      existencia(index){
        let c = this.revisarProductos(index);
        if(c!=null){
          c=this.productos[index].cantidad-this.pedido[c].cantidad;
          return c;
        } else return this.productos[index].cantidad;
      },

      revisarProductos(index){
        if(this.pedido.length==0){
          return null;
        }else{
          let i=0;
          for(p of this.pedido){
            if(p.item==index){
              return i;
              break;
            } else {
              i++;
            }
          }
          return null;
        }
      },    
      agregarPedido(index){
        let p=this.pedido[this.revisarProductos(index)];
        if(p!=undefined){
          p.cantidad+=this.cantidad[index];
          this.pedido[this.revisarProductos(index)]=p;
          this.fecha[this.revisarProductos(index)]=hoyFecha();
          this.$forceUpdate();
        }else {
          this.pedido.push(
            {item:index, cantidad: this.cantidad[index]}
          );
          //this.fecha[index]=hoyFecha();
        }
        //this.productos[index].cantidad-=this.cantidad[index];
        //this.fecha[index]=hoyFecha();
        this.cantidad[index]='';
      },
      quitarPedido(index){
          //this.productos[index].cantidad+=this.cantidad[index];
          this.pedido.splice(this.revisarProductos(index),1);
          this.cantidad[index]=null;
      },
      agregarProducto(){
        this.productos.push({
          nombre: this.nuevaproducto, cantidad: 0
        });
        this.nuevaproducto = '';
      }
  },
  created(){
    this.$http.get('index.php?r=trabajo/get-repuestos').then(function(data){
      this.productos = data.body.slice(0,10);
    })
  },
  computed: {
      sumarTotal(){
        this.total = 0;
        for(p of this.pedido) {
          this.total += p.cantidad * this.productos[p.item].precio;
        };
        document.getElementById("trabajo-reca").value=JSON.stringify(this.pedido);
        return this.total;
      }/*,
      incrementarPedido(index){
          this.total = 0;
          for(producto of this.productos) {
            this.total += producto.cantidad;
          }
          return this.total;
      }*/
  }
})