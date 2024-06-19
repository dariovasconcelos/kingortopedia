function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value + "; path=/";
}

function checkCookie()
{
 var mayordedad=getCookie("mayordedad");
 if (mayordedad!=null && mayordedad!="") return;
 else
 {
 jQuery.noConflict();
 jQuery(document).ready(function() {
	var id = '#dialog';

	// Obtener altura y anchura de la pantalla
	var mascaraHeight = jQuery(document).height();
	var mascaraWidth = jQuery(window).width();

	// Hacer que la mascara opaca ocupe toda la pantalla
	// jQuery('#mascara').css({'width':mascaraWidth,'height':mascaraHeight});
	// Muy bonito pero si empieza a un tamaño y luego maximiza se va a tomar
	// por saco. Lo mejor es que ocupe el 100% y dejarse de historias (especificado en css)

	// Efecto transicion
	jQuery('#mascara').fadeIn(1000);	
	jQuery('#mascara').fadeTo("slow",0.9);	

	// Obtener altura y anchura de la ventana
	var winH = jQuery(window).height();
	var winW = jQuery(window).width();

	// Centrar el popup
	jQuery(id).css('top',  winH/2-jQuery(id).height()/2);
	jQuery(id).css('left', winW/2-jQuery(id).width()/2);

	// Efecto transicion
	jQuery(id).fadeIn(1500); 	

	// Si el boton cerrar es clicado 
	jQuery('.window .enter').click(function (e) {
		//Cancela el comportamiento del enlace
		e.preventDefault();
		
		jQuery('#mascara').fadeOut(1000);
		jQuery('.window').fadeOut(1000);
	});		
	
	// Si hacen click en la mascara (para pulsate requiere jquery effects core)
	jQuery('#mascara').click(function () {
	//	jQuery('#dialog').effect("pulsate", { times:4 }, 600);
	//	jQuery(this).hide();
	//	Para ahorrarnos un par de librerías hacemos un pulsate made in taiwan
		jQuery('#dialog').fadeOut(200);
		jQuery('#dialog').fadeIn(100);
		jQuery('#dialog').fadeOut(200);
		jQuery('#dialog').fadeIn(100);
	});

	// Si aceptan la mayoria de edad
	jQuery('#mayor').click(function () {
		setCookie('mayordedad','ok',dias);
	});

 });
 }
}
// Al cargar la ventana empezamos la fiesta
window.onload = checkCookie();
