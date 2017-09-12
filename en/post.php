<?php
if(isset($_POST['submit']) && ($_POST['vysledok'] == 4)) {
	$emailbody = 
	'<span style="color:Brown">Meno: </span>'.$_POST['name']."<br>"
	.'<span style="color:Brown">Telefon: </span>'.$_POST['tel']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['mail']."<br>"
	.'<span style="color:Brown">Sprava: </span>'.$_POST['msg']."<br>"
	.'<span style="color:Gray">Kontaktný formulár pre TAVAT</span>';
		
	mail('yco.soltes@gmail.com', '-> kontakt TAVAT', $emailbody ,'Content-Type: text/html; charset=UTF-8','-f admin@tavat.sk');
	header("Location:http://google.sk");
}
?>