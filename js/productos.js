var req = createXMLHttpRequest();
	function createXMLHttpRequest() {
		 var ua;
		 if(window.XMLHttpRequest) {
			 try {
			  ua = new XMLHttpRequest();
			 } catch(e) {
			  ua = false;
			 }
		 }else if(window.ActiveXObject) {
				try {
				ua = new ActiveXObject("Microsoft.XMLHTTP");
			  } catch(e) {
				ua = false;
			  }
		 }
		 return ua;
		}
function soloNumeros(e){

	var key = window.Event ? e.which : e.keyCode
//alert key;
	return ((key >= 48 && key <= 57 )|| key==8 )

}


function agregaCarrito(prod,cant){
		  
			 if(cant==0){
			 		cant=document.getElementById('cantidad').value;	
			 }
			 

	//	   	 fbq('track', 'AddToCart');
		  	//	no tiene que agregar!!! alert('vacio');
				var rnd982g = Math.random();
			//	alert('agregaproducto.php?rnd982g='+ rnd982g+'&cant='+cant +'&valores='+ valores);
		
				 			var str ="";
							var errorMsj ='';
							var vOk = 0;
							var vOk2 = 0;
					 		req.open('GET', 'js/agregaproducto.php?rnd982g='+ rnd982g+'&cant='+cant +'&id='+ prod);
					  	req.onreadystatechange = handleResponseAgrega;
					  	req.send('');
		

}
		
		function handleResponseAgrega() {
		///	alert('a');
		
		 if(req.readyState == 4){
 		// document.getElementById('open-popup-link').click();
	  	var response = req.responseText;
	  	 window.location.assign("carrito.php");
	 // 	alert(response);
	  	//document.getElementById('cant_prod_carrito').innerHTML=response;
	    //document.getElementById('Notas').value='';
	 //  	alert(response);
		/*	if(response=='NO'){
				alert('No se pudo completar su pedido por favor intente nuevamente');
				document.getElementById('Siguiente').style.display='block';
		 		document.getElementById('procesando').style.display='none';	
			}else{
				document.getElementById('nro_pedido').value=response;
				document.frmCompra.submit();
			}*/
		}
	}
		
		
	  //
	
		 
		
		
			function getFormContacto(fobj) {
		 var str ='';
		 var ft  ='';
		 var fv  ='';
		 var fn  ='';
		 var els ='';
		 var msg ='';

		 for(var i = 0;i < fobj.elements.length;i++) {
		  els = fobj.elements[i];
		  ft = els.title;
		  fv = els.value;
		  fn = els.name;
		  
			 switch(els.type) {
			  case"text":
			  case"hidden":
			  case"textarea":
			  case"password":
			   case"select":

			  // is it a required field?
			  
			  if(encodeURI(ft) =="required" && encodeURI(fv).length < 1) {
					msg = msg +'\n' + fn +' required field, please complete.';
			  }
			  str += fn +"=" + encodeURI(fv) +"&";
			  break; 
			
			  case"checkbox":
			  case"radio":
			   if(els.checked) str += fn +"=" + encodeURI(fv) +"&";
			  break;	
			
			  case"select-one":
				str += fn +"=" +
				els.options[els.selectedIndex].value +"&";
			  break;

			 }
		 	}

		  if(msg !=''){
		  	return false;
		  }
		 	 
		 	str = str.substr(0,(str.length - 1));
		 	return str;
		}
