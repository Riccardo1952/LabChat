Chat <br></br>
Benvenuto <?php
setcookie("username_chat", "Riccardo");
echo $_COOKIE['username_chat'] 
?>!
<br></br><iframe src="chat.html" style="" height="225" width="470"></iframe><br></br>
<form method="POST" action="chat.php">
    <input name="messaggio" type="text" size="65"></input>
    <input value="Invia" type="submit">
</form>
<!-- Cambia username:
<form method=post action="cambio_user.php">
    <input name="username" type="text" size="30"></input>
    <input value="Cambia" type="submit">
</form> -->
<?php
/* if ($_COOKIE['username_chat'] == ""){setcookie("username_chat", "Guest");} */
$inizializzazione = fopen("chat.html", "a");  //per l'inizializzazione della chat e dell'iframe
fwrite($inizializzazione, " "); 	
if (isset($_POST['messaggio'])) {	
    echo("*****");	//scrittura del messaggio
    $var=fopen("chat.html", "a"); // open file in scrittura addizionale
    fwrite($var, "[");
    fwrite($var, $_COOKIE['username_chat']);
    fwrite($var, "] - ");
    fwrite($var, $_POST['messaggio']);
    fwrite($var, "<br>");
}
?>