$("#frmPrenom").blur(function(){
    if ( $(this).val().length == 0)
     
     { 
       /* alert("Handler for .blur() called.");*/
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
         // test si chaine plus petite que 6 caracteres
         if( $(this).val().length < 6 )
         {
             $(this).addClass("is-invalid");
         } else {
             // test si chaine est plus grande que 12 caracteres
             if( $(this).val().length > 12 )
             {
                 $(this).addClass("is-invalid");
 
             } else {
                 $(this).removeClass("is-invalid").addClass( "is-valid" );
             }
 
         }
 
         //$(this).removeClass("is-invalid").addClass( "is-valid" );
     }
     
 });