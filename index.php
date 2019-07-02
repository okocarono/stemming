<?php 
	require_once ('stemming.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>IR - STEMMING NAZIEF</title>
 </head>
 <body>
 <center>
 	<h1>PENCARIAN KATA DASAR DENGAN ALGORITMA NAZIEF</h1>
 	<form method="post" action="">
 		<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
 		<input type="submit" name="submit" value="Submit">
 	</form><br/>
 	<?php 
 		if(isset($_POST['kata'])){
		$teksAsli = $_POST['kata'];
		echo "Teks asli : ".$teksAsli.'<br/>';
		$stemming = stemming($teksAsli);
		echo "Kata dasar : ".$stemming.'<br/>';
		}
 	 ?></center>
 </body>
 </html>