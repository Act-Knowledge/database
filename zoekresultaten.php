<?php

require("./template/header.php");


?>

	<div class="wrapper">
		<div class="rij1-1">
			<div class="tutorials">
		 		<h3>Zoekresultaten</h3>
<<<<<<< HEAD
				

		 		<?php 
				
				if(isset($_GET['submit']))
             {
			 
            $zoek = Security($_GET['zoek']);
            if(trim($zoek))
            {
			
			$sql = $mysqli->query("SELECT * FROM tuts where titel like '%".$zoek."%'") or die('error');
	        
			
				while($row = mysqli_fetch_object($sql))
				{
				
				echo'<section class="tekst">';
				
				echo'<dl>';
		 		echo'<dt><b>jQuery</b></dt>';
				if($row->type == '4')
				{
		 			
		 				echo'<dd><a href="./zoekresultaten.php?zoek='.$zoek.'&submit=zoeken&id='.$row->id.'">'.$row->titel.'</a></dd>';
		 			
				}
				else
				{
				echo "Geen resultaten";
				}
				echo'</dl>';
		 		echo'<br>';
				
				
               echo'<dl>';
		 		echo'<dt><b>PHP</b></dt>';
				if($row->type == '3')
				{
		 			
		 				echo'<dd><a href="./zoekresultaten.php?zoek='.$zoek.'&submit=zoeken&id='.$row->id.'">'.$row->titel.'</a></dd>';
		 			
				}
				else
				{
				echo "Geen resultaten";
				}
				echo'</dl>';
		 		echo'<br>';
				
				
				echo'<dl>';
		 		echo'<dt><b>HTML</b></dt>';
				if($row->type == '1')
				{
		 			
		 				echo'<dd><a href="./zoekresultaten.php?zoek='.$zoek.'&submit=zoeken&id='.$row->id.'">'.$row->titel.'</a></dd>';
		 			
				}
				else
				{
				echo "Geen resultaten";
				}
				echo'</dl>';
		 		echo'<br>';
				
				
					echo'<dl>';
		 		echo'<dt><b>CSS</b></dt>';
				if($row->type == '2')
				{
		 			
		 				echo'<dd><a href="./zoekresultaten.php?zoek='.$zoek.'&submit=zoeken&id='.$row->id.'">'.$row->titel.'</a></dd>';
		 				
				}
				else
				{
				echo "Geen resultaten";
				}
				echo'</dl>';
		 		echo'</section>';
				}
				}
				else{
				echo "geen zoekresultaten";
				}
				}
				?>
				
				
=======
		 		<section class="tekst">
		 			<dl>
		 				<dt><b>jQuery</b></dt>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 			</dl>
		 			<br>
		 			<dl>
		 				<dt><b>PHP</b></dt>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 			</dl>
		 			<br>
		 			<dl>
		 				<dt><b>HTML</b></dt>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 			</dl>
		 			<br>
		 			<dl>
		 				<dt><b>CSS</b></dt>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 				<dd><a href="#">Tag</a></dd>
		 			</dl>
		 		</section>
>>>>>>> 221c4ac91aa8e82063e8edff98e037a554c30d0e
			</div>
		</div>
		<div class="rij2-2">
			<div class="fotos">
		 		<h2>Titel</h2>
		 		<section class="image"></section>
		 		<section class="tekst">Lorem ipsum dolor sit amet, elit di consectetur adipiscing elit.</section>
			</div>
			<div class="fotos">
		 		<h2>Titel</h2>
			</div>
		</div>
	</div><!-- end wrapper -->

	<footer></footer>


</body></html>