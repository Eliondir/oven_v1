$(document).ready(function() {

    check_form();

});


function check_form()
{
    $("#register").on("submit",function(e) {

        // Blockage de l'action par défaut
       e.preventDefault();
		
       pass1 = $("#mdp1").val();
       pass2 = $("#mdp2").val();
	   pseudo = $("#pseudo").val().length;
	   username = $("#pseudo").val();
       if(pass1 != pass2)
       {
		   $("#pass1").removeClass( "has-success has-error" );
		   $("#pass1").addClass( "has-error" );
		   $("#pass2").removeClass( "has-success has-error" );
		   $("#pass2").addClass( "has-error" );
		   $("#incorrectemdp" ).remove();
		   $("#pass2").append("<span id=incorrectemdp class=help-block>Mot de passe ne correspondent pas</span>");
       }
	   else if (pseudo < 3) 
	   {
		   $("#surnom").removeClass( "has-success has-error" );
		   $("#surnom").addClass( "has-error" );
		   $("#result").html(pseudo);
	   }
       else
       {
			username = $("#pseudo").val();
			xhr = new XMLHttpRequest() ;
			xhr.open("GET", 'check.php?user='+username, false) ;
			xhr.send();
			
			if ( xhr.responseText == '1')
			{
				$("#surnom").removeClass( "has-success has-error" );
				$("#surnom").addClass( "has-error" );
				$("#incorrectepseudo" ).remove();
				$("#surnom").append("<span id=incorrectepseudo class=help-block>Ce pseudo a déjà été choisi !...</span>");
			}
			
			else {
				email = $("#email").val();
				xhr = new XMLHttpRequest() ;
				xhr.open("GET", 'checkemail.php?email='+email, false) ;
				xhr.send();
				if ( xhr.responseText == '1')
				{
				$("#mail").removeClass( "has-success has-error" );
				$("#mail").addClass( "has-error" );
				$("#incorrecteemail" ).remove();
				$("#mail").append("<span id=incorrecteemail class=help-block>Cet email existe déjà...</span>");
				}
				else
				{
					password     = pass1;
					email        = $("#email").val();
					pseudo       = $("#pseudo").val();
					naissance	= $("#naissance").val();
					$("#pass1").removeClass( "has-success has-error" );
					$("#pass1").addClass( "has-success" );
					$("#pass2").removeClass( "has-success has-error" );
					$("#pass2").addClass( "has-success" );
					$("#surnom").removeClass( "has-success has-error" );
					$("#surnom").addClass( "has-success" );
					$("#mail").removeClass( "has-success has-error" );
					$("#mail").addClass( "has-success" );
					$("#incorrecteemail").remove();
					$("#incorrectemdp" ).remove();
					$("#incorrectepseudo" ).remove();
					
					$.ajax({
						url: 'reg.php',
						type: 'POST',
						data: 'email=' + email + '&pseudo=' + pseudo + '&password=' + password + '&naissance=' + naissance,
						success: function(data)
						{
							$("#result").html(data);
							alert("Bienvenue chez les Ombrevents");
						},
						error : function(resultat, statut, erreur)
						{
							$("#error").html(resultat + "<br/>" + statut + "<br/>" + erreur);
						}
					});
				}
			}
       }

    });
}

