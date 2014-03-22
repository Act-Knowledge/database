<?php

require("./template/header.php");


?>

	<div class="wrapper">
		<div class="rij1-1">
			<div class="tutorials">
		 		<h3>Zoekresultaten</h3>
				

		 		<?php 
				
				if(isset($_GET['submit']))
             {
			 
            $zoek = Security($_GET['zoek']);
            if(trim($zoek))
            {
			
			$sql = $mysqli->query("SELECT * FROM tuts where titel like '%".$zoek."%'") or die('error');
	        
			if(mysqli_num_rows($sql) > 0)
			{
			
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
				else{
				echo "geen zoekresultaten";
				}
				}
				else
				{
				echo "Geen zoekwoord opgegeven!";
				}
				?>
				
				
			</div>
		</div>
		<div class="rij2-2">
			<div class="fotos">
			<?php if(isset($_GET['id']))
			{
			    $id = Security($_GET['id']);
				$sql = $mysqli->query("SELECT * FROM tuts WHERE id = '".$id."' LIMIT 1");
				$row = mysqli_fetch_object($sql);
		 		echo'<h2>'.$row->titel.'</h2>';
		 		echo'<div class="image"><center><img src="'.$row->afbeelding.'" style="width:200px;" alt="'.$row->titel.'"></center>	</div><br>';
		 		echo'<section class="tekst">'.$row->bericht.'</section>';
			}
			else
			{
			
			echo'<h2>Titel</h2>';
		 		
		 		echo'<section class="tekst">Nog geen bericht aangeklikt!</section>';
			}
			?>
			</div>
			
			</div>
		
	</div><!-- end wrapper -->

	<footer></footer>


</body></html>