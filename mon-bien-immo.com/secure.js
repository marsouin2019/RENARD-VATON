

$("#frmPrenom").blur(function(){
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
            if( $(this).val().length > 15 )
            {
                $(this).addClass("is-invalid");

            } else {
                $(this).removeClass("is-invalid").addClass( "is-valid" );
            }

        }

    }
    
});

