$(document).ready(function(){
			    
                 $window = $(window);
                
    
                $("#sucursales").mouseenter(function ()
                {
                    if ($window.width() > 1200){
                      $(".productos-menu").hide();
                      $(".sucursales-menu").fadeIn();
                    }
                
                });
                
                
                $(".sucursales-menu").mouseleave(function ()
                {
                    if ($window.width() > 1200){
                      $(".sucursales-menu").fadeOut();
                    }
                });
    
                $("#tienda").mouseenter(function ()
                {
                    $(".sucursales-menu").hide();
                    $(".productos-menu").fadeIn();
                });
                
                
                $(".productos-menu").mouseleave(function ()
                {
                      $(".productos-menu").fadeOut();
                });
    

    
			});