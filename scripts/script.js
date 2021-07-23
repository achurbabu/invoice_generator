function dis_function() 
{
  document.getElementById("message").innerHTML="";
  document.getElementById("percentage").innerHTML="";
  document.getElementById("dollar").innerHTML="";
  var t =0;
  var x = document.getElementById("discount").value;
  var c=x;
  var y =document.getElementById("subtotal").innerHTML;
  var format = /[0-9][%]$/; 
  var format2 = /[0-9]$/; 
  
if(x.match(format)||x.match(format2))
  
  {	
  		if(x.includes("%"))
  		{
  		
  				 var dis=parseInt(x); 
  				 var disc= 100 - dis;
  				 t= parseFloat(y)*disc/100;
  				 document.getElementById("total").innerHTML=parseInt(t) ;
           document.getElementById("discount_value").innerHTML= x;
           
  				 

 		}
 		else{
 				var dis=parseInt(x); 
 				t = parseFloat(y)-dis;
 				document.getElementById("total").innerHTML=parseInt(t);
        document.getElementById("dollar").innerHTML="$";
        document.getElementById("discount_value").innerHTML= x;
        
 		}
  }
 else
 document.getElementById("message").innerHTML ="Specify % for discount on percentage Eg: 5% & for discount on currency enter the amount Eg :150";
 document.getElementById("discount").innerHTML= c; 
  
}
 function PrintInvoice() 
   {  
       var divContents = this.document.getElementById("invoice").innerHTML;  
       var printWindow = window.open('', '', 'height=200,width=400');  
       printWindow.document.write('<html><head><title>Print Invoice</title>');  
       printWindow.document.write('</head><body >');  
       printWindow.document.write(divContents);  
       printWindow.document.write('</body></html>');  
       printWindow.document.close();  
       printWindow.print();
              
    }  


