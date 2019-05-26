$(document).ready(function(){
    $(".alert").hide();
    $("#form").submit(function(evt){
        
        var message = "";
        
        var postalCode = $("[name=postalcode]").val();
        if (postalCode === ""){
            message += "- Postal Code is required.<br/>";
        } else if ((/^[0-9]{6}$/).test(postalCode) === false){
            message += "- You must enter a valid postal code.<br/>";
        }
    
        if(message.length > 0){
            $(".alert").html(message);
            $(".alert").show();
            
            return false;
        }
    });
});

