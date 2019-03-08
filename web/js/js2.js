var reca=[];

    $("#trabajo-vehtra").on("change",function(){
        if($("#trabajo-vehtra").val()==""){
            $("#modalbutton").show();
        } else {
            $("#modalbutton").hide();
        }
    });
    $("#submitveh").on("click",function(e){
        if($("#trabajo-vehtra").val()!=""){
            $("#modalbutton").hide();
            $("#submitveh").hide();
            $("#trabajo-vehtra").selected()="123";
        }
    });
    $("#agregar-vehiculo").on("click",function(e){
        $("#veh").yiiActiveForm("resetForm");
        $("#titulo").hide();
        $("#trabajo").toggle();
    });
    $("button.cart").on("click",function(e){
        //console.log(window.repreg);
        var id="tr"+this.id;
        var row=document.getElementById(id);
        //console.log(parseInt(row.cells[2].innerHTML));
        row.cells[2].innerHTML--;
        var id="l"+this.id;
        var label=document.getElementById(id)
        v=parseInt(label.getElementsByTagName("span")[0].innerHTML) || 0;
        v++;
        label.getElementsByTagName("span")[0].innerHTML=v;
        if(v>0){
            $(".minus#"+this.id).show();
            $(".cantidad#l"+this.id).show();
            //console.log("cart : "+v);
            if(v==1){
                window.repreg++;
                var table = document.getElementById("tb-rep-usa");
                var row2=table.rows[window.repreg];
                //console.log(table.rows[window.repreg]);
                row2.setAttribute("id","r"+this.id);
                var f=new Date();
                row2.cells[1].innerHTML=f.getFullYear() + "/" + (f.getMonth() +1) + "/" + f.getDate();
                row2.cells[2].innerHTML=row.cells[1].innerHTML;
                table = document.getElementById("tb-rep-usa");
                $("#r"+this.id).show();
            }
            console.log(reca);
            console.log(reca.length);
            reca.push(this.id);
            document.getElementById("trabajo-reca").value=JSON.stringify(reca);
            id="tr"+this.id;
            row=document.getElementById(id);
            var precio=parseInt(row.cells[3].innerHTML) || 0;
            id="r"+this.id;
            row=document.getElementById(id);
            row.cells[3].innerHTML++ || 0;
            row.cells[4].innerHTML = row.cells[3].innerHTML*precio || 0;
            row.cells[4].innerHTML += " Bs.";
            calcTotal();
        }
        
    });
    $("button.minus").on("click",function(e){
        var id="tr"+this.id;
        var row=document.getElementById(id);
        var precio=parseInt(row.cells[3].innerHTML) || 0;
        //console.log(precio);
        row.cells[2].innerHTML++;
        id="r"+this.id;
        row=document.getElementById(id);
        //console.log(row.id);
        row.cells[3].innerHTML-- || 0;
        row.cells[4].innerHTML = row.cells[3].innerHTML*precio || 0;
        row.cells[4].innerHTML += " Bs.";
        v = row.cells[3].innerHTML;
        //console.log("minus : "+v);
        id="l"+this.id;
        document.getElementById("l2").lastChild.innerHTML=v;
        calcTotal();
        if(v<=0){
            $(this).hide();
            $(".cantidad#"+id).hide();
            $("#r"+this.id).hide();
            //row.remove();
        }
    });
    $("#myInput").on("keyup", function(){
    $("#maxRows").val("Todos");
    $(".pagination").html("");
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tb-rep-dis");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
    });
    $("button.btrash").on("click", function(){
        //var table = document.getElementById("tb-rep-usa");
        //console.log(parseInt(table.rows[parseInt(this.name)].cells[4].innerHTML));
        document.getElementById("ch"+this.id).checked = false;
        var id="tr"+this.id;
        var row = document.getElementById(id);
        var id2="r"+this.id;
        var row2 = document.getElementById(id2);
        var sum = parseInt(row.cells[2].innerHTML)+parseInt(row2.cells[3].innerHTML);
        row.cells[2].innerHTML=sum;
        id="l"+this.id;
        var label=document.getElementById(id).getElementsByTagName("span")[0].innerHTML;
        label=0;
        id="#l"+this.id;
        $(id).hide();
        id=".minus#"+this.id;
        $(id).hide();
        row2.cells[0].innerHTML="";
        row2.cells[1].innerHTML="";
        row2.cells[2].innerHTML="";
        row2.cells[3].innerHTML="";
        row2.cells[4].innerHTML="";
        //row.style.display = "none";
        row2.remove();
        calcTotal();
    });
//TableSchema
getPagination("#tb-rep-dis");

var x = document.getElementsByClassName("lch");
var i;
for (i = 0; i < x.length; i++) {
    x[i].previousSibling.remove()
}

function fillData (x){
    //console.log(x);
    var table = document.getElementById("tb-rep-usa");
    for (i = 0; i < x.length; i++) {
        table.rows[i+1].cells[1].innerHTML=x[i].fecha;
        table.rows[i+1].cells[2].innerHTML=x[i].nombre;        
        table.rows[i+1].cells[3].innerHTML=x[i].cantidad;                
        table.rows[i+1].cells[4].innerHTML=(x[i].cantidad*x[i].precio)+" Bs.";
        table.rows[i+1].setAttribute("id","r"+x[i].id);
        var id="#r"+x[i].id;
        $(id).show();       
        table.rows[i+1].cells[5].childNodes[0].setAttribute("id",x[i].id);
        //var ch1=table.rows[i+1].cells[6].childNodes[0];
        //console.log(ch1.id);
        // ch1.setAttribute("id","ch"+(x[i].id));
        // ch1.setAttribute("value", x[i].id);
        // ch1.setAttribute("checked", "checked");
        // var ch2=table.rows[i+1].cells[6].childNodes[1];
        // ch2.setAttribute("id","ca"+(x[i].id));
        // ch2.setAttribute("value", x[i].cantidad);
        // ch2.setAttribute("checked", "checked");

        id="span#l"+x[i].id;
        $(id).show();
        id="l"+x[i].id;
        label=document.getElementById(id);
        label.getElementsByTagName("span")[0].innerHTML=x[i].cantidad;
        id=".minus#"+x[i].id;
        $(id).show();
    }
    window.repreg=i;
    //console.log(window.repreg);
    var total=0;
     for (var r = 1, n = table.rows.length; r < n-1; r++) {
        table.rows[r].cells[0].innerHTML=r;
        total+=parseInt(table.rows[r].cells[4].innerHTML) || 0;
     }
    if(n>2){
            table.rows[n-1].style.display="";
            table.rows[n-1].cells[1].innerHTML=total+" Bs";
        }else{
            table.rows[n-1].cells[1].innerHTML="";
            table.rows[n-1].cells[0].innerHTML="";
            table.rows[n-1].style.display="none";
        }
}
function calcTotal(){
        var total=0;    
        var table=document.getElementById("tb-rep-usa");
        for (var r = 1, n = table.rows.length; r < n-1; r++) {
                table.rows[r].cells[0].innerHTML=r;
                val = parseInt(table.rows[r].cells[4].innerHTML) || 0; //convierte a cero NaN
                total+=val;
        }
        //console.log(n);
        if(n>2 && total>0){
            table.rows[n-1].style.display="";
            table.rows[n-1].cells[1].innerHTML=total+" Bs";
        }else{
            table.rows[n-1].cells[1].innerHTML="";
            table.rows[n-1].cells[0].innerHTML="";
            table.rows[n-1].style.display="none";
        }
}
// $(function(){
//     var repuestos = '<?php echo json_encode($model->repuestos, JSON_PRETTY_PRINT) ?>';
//     for(let i = 0; i < repuestos.length; i++){
//        console.log(repuestos[i]);
//     }    
// });