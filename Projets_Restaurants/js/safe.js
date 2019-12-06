

$("#frmEmail2").blur(function(){
    if ( $(this).val().length == 0)
     
     { 
       $(this).addClass("is-invalid");
     }else {
       $(this).removeClass("is-ivalid").addClass( "is-valid" );
     }
   });
 
   $("#frmNom").blur(function(){
     if( $(this).val().length == 0 )
     {
         $(this).addClass("is-invalid");
 
     } else {
         $(this).removeClass("is-invalid").addClass( "is-valid" );
     }if($(this).val().length < 6)
     {
         $(this).addClass("is-invalid");
     }else{
         if($(this).val().length > 50){
             $(this).addClass("is-invalide");         
            }else{
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
     }
 
 });
 
 $("#frmEmail").blur(function(){
     if( $(this).val().length == 0 )
     {
         $(this).addClass("is-invalid");
 
     } else {
         $(this).removeClass("is-invalid").addClass( "is-valid" );
     }
     
 });
 
 $("#frmPass").blur(function(){
     if( $(this).val().length == 0 )
     {
         $(this).addClass("is-invalid");
 
     } else {
         if( $(this).val().length < 8 )
         {
             $(this).addClass("is-invalid");
         } else {
             if( $(this).val().length > 27 )
             {
                 $(this).addClass("is-invalid");
 
             } else {
                 $(this).removeClass("is-invalid").addClass( "is-valid" );
             }
 
         }
 
     }
     
 });

 $("#frmPass2").blur(function(){
    if( $(this).val().length == 0 )
    {
        $(this).addClass("is-invalid");

    } else {
        if( $(this).val().length < 8 )
        {
            $(this).addClass("is-invalid");
        } else {
            if( $(this).val().length > 25 )
            {
                $(this).addClass("is-invalid");

            } else {
                $(this).removeClass("is-invalid").addClass( "is-valid" );
            }

        }
        
    }
    
});


 
 
 