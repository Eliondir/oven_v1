<script>
xhr = new XMLHttpRequest() ;
xhr.open("GET", 'check.php?username=test', false) ;
xhr.send();
if ( xhr.responseText == '1')
     alert ("Ce pseudo a déjà été choisi !...");
else {
      alert ("Ce pseudo est libre !...");
     }
</script>