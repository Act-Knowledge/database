<?php

require("./template/header.php");


?>

	<div class="wrapper">
		<div class="rij1-1">
			<div class="tutorials">
		 		<h3>Archief</h3>
				

		 		<?php 
				
				
				echo'<section class="tekst">';
			
			$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 4") or die('error');
	        
			if(mysqli_num_rows($sql) > 0)
			{
			echo'<dt><b>jQuery</b></dt>';
				while($row = mysqli_fetch_object($sql))
				{
				
				
				echo'<dl>';
		 		
				if($row->type == '4')
				{
		 			
		 				echo'<dd><a href="./article.php?id='.$row->id.'">'.$row->titel.'</a></dd>';
		 			
				}
				
				echo'</dl>';
		 		
				
				}
				}
				echo'<br>';
				$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 3") or die('error');
	        
			if(mysqli_num_rows($sql) > 0)
			{
			
		 		echo'<dt><b>PHP</b></dt>';
				while($row = mysqli_fetch_object($sql))
				{
               echo'<dl>';
				if($row->type == '3')
				{
		 			
		 				echo'<dd><a href="./article.php?id='.$row->id.'">'.$row->titel.'</a></dd>';
		 			
				}
				
				echo'</dl>';
		 		
				
				}
				}
				echo'<br>';
				
				$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 1") or die('error');
	        
			if(mysqli_num_rows($sql) > 0)
			{
			echo'<dt><b>HTML</b></dt>';
				while($row = mysqli_fetch_object($sql))
				{
				echo'<dl>';
		 		
				if($row->type == '1')
				{
		 			
		 				echo'<dd><a href="./article.php?id='.$row->id.'">'.$row->titel.'</a></dd>';
		 			
				}
				
				echo'</dl>';
		 		
				}
				}
				echo'<br>';
				$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 2") or die('error');
	        
			if(mysqli_num_rows($sql) > 0)
			{
			echo'<dt><b>CSS</b></dt>';
				while($row = mysqli_fetch_object($sql))
				{
				
					echo'<dl>';
		 		
				if($row->type == '2')
				{
		 			
		 				echo'<dd><a href="./article.php?id='.$row->id.'">'.$row->titel.'</a></dd>';
		 				
				}
				
				echo'</dl>';
		 		echo'</section>';
				}
				
				}
				else{
				echo "geen zoekresultaten";
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
		 		
				if(trim($row->videolink)) 
			{
			echo '<center><iframe width="532" height="315" src="'.$row->videolink.'" frameborder="0" allowfullscreen></iframe></center>';
			}
			else
			{
			echo '<div class="image"><center><img src="'.$row->afbeelding.'" style="width:200px;" alt="'.$row->titel.'"></center>	</div>';
			}
		
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