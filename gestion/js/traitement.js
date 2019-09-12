// traitement champs formulaire obligatoire
$(document).ready(function(){
    // le form, champs, type
    $("#frmInscription input[type='text']").blur(function(){
        // verifier si donnée saisie //
        if(! $(this).val() ){
         // faire quelque chose//
         $(this).addClass("error");   
        }
        else{
            //faire autre chose//
            $(this).removeClass("error");
        }

    });

    $("#frmInscription input[type='email']").blur(function(){
        // verifier si donnée saisie //
        if(! $(this).val() ){
         // faire quelque chose//
         $(this).addClass("error");   
        }
        else{
            //faire autre chose//
            $(this).removeClass("error");
        }

    });
    $("#frmInscription input[type='password']").blur(function(){
        // verifier si donnée saisie //
        if(! $(this).val() ){
         // faire quelque chose//
         $(this).addClass("error");   
        }
        else{
            //faire autre chose//
            $(this).removeClass("error");
        }

    });
    $("#frmInscription").validate();
    
    
});







