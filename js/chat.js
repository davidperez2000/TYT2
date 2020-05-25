setInterval (loadLog, 1000);  
setInterval (conectados, 1000);  
function loadLog(){		
    $.ajax({ 
        //url: "../views/"+sesion+".txt",
        url: "../views/chat.txt",
        cache: false,
        success: function(txt){		
        $("#chat").html(txt); 	
        
          },
    });
}
function conectados(){		
    $.ajax({ 
        url: "../views/conectados.txt",
        cache: false,
        success: function(txt){		
        $("#conectados").html(txt); 	
          },
    });
}