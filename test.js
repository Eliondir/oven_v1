$(document).ready(function() {

    check_form();

});

function check_form()
{
	$("#register").on("submit",function(e) {
	{
		e.preventDefault();
		username = $("#pseudo").val();
		 alert (username);
		xhr = new XMLHttpRequest() ;
			xhr.open("GET", 'check.php?user='+username, false) ;
			xhr.send();
		if ( xhr.responseText == '1')
          alert ("Ce pseudo a déjà été choisi !...");
       else {
          alert ("Ce pseudo est libre !...");
       }
}
})
}