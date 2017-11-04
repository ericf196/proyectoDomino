function cargaSendMail(){

    $(".c_error").remove();
 
    var filter= /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var s_email = $('#c_mail').val();
    var s_name = $('#c_name').val();    
    var s_msg = $('#c_msg').val();
    var s_spam_textbox1 = $('#c_spam_textbox1').val();
    var s_spam_textbox2 = $('#c_spam_textbox2').val();
    
    
    if (filter.test(s_email)){
    sendMail = "true";
    
    $('#c_mail').css("border-color","");   	
    } else{
    $('#c_mail').after("<span id='c_error_mail' class='c_error'>Ingrese e-mail valido.</span>");
    $(".c_error").css("color","Red");
    $('#c_mail').css("border-color","Red");   
    sendMail = "false";
    }
    if (s_name.length == 0 ){
    $('#c_name').after( "<span id='c_error_name' class='c_error'>Ingrese su nombre.</span>" );
    $(".c_error").css("color","Red");
    $('#c_name').css("border-color","Red");  	
    var sendMail = "false";
    } else{
    $('#c_name').css("border-color","");
    }	
    if (s_msg.length == 0 ){
    $('#c_msg').after( "<span id='c_error_msg' class='c_error'>Ingrese mensaje.</span>" );
    $(".c_error").css("color","Red");
    $('#c_msg').css("border-color","Red");
    var sendMail = "false";
    } else{
    $('#c_msg').css("border-color","");
    }		
    //Si el primer textbox se deja en blanco
    if (s_spam_textbox1.length == 0 ){
        var s_Bot1 = "false";
    } 
    //Si el segundo textbox no se modifica
    if (s_spam_textbox2 == "http://" ){
        var s_Bot2 = "false";
    }
    if (s_Bot1 == "false" && s_Bot2 == "false"){
        spamBot = "false";
    }
    else { spamBot = "true"; }

    
    
    if(sendMail == "true" && spamBot == "false" ){
     
     var datos = {
 
            "nombre" : $('#c_name').val(),
 
            "email" : $('#c_mail').val(),
             
            /*"url" : $('#c_url').val(),
                          
            "telefono" : $('#c_telefono').val(),*/

            "asunto" : $('#c_asunto').val(),
 
            "mensaje" : $('#c_msg').val(),
            
            "cenviar" : $('#c_enviar').val()
             
     };
 
     var URLactual = window.location;
     var URLcompleta = URLactual + 'wp-content/themes/europartes/mail.php'
     $.ajax({
             type: "POST",
             data:  datos,
             url:   URLcompleta,
 
             beforeSend: function () {
 
                    $("#c_enviar").val("Enviando...");
 
             },
 
             success:  function (response) {
 
                    $('form')[0].reset(); 
                    $("#c_enviar").val("Enviar");
                    $("#c_information p").html(response);
                    $("#c_information").css({
                                            "background-color": "#DFF2BF",
                                            "color": "#4F8A10",
                    });				
                    $("#c_information").text( "¡Mensaje enviado correctamente!" );
                    $("#c_information").fadeIn('slow');
                    
 
             },
             error: function(response) {

                    $('form')[0].reset(); 
                    $("#c_enviar").val("Enviar");
                    $("#c_information p").html(response);
                    $("#c_information").css({
                                            "background-color": "#b14b47",
                                            "color": "#970e09",
                    }); 
                    $('#c_information').text('Hubo un error!');                 
                }
     
     });
 
    }
 
}