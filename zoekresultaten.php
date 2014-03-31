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
			
				$row = mysqli_fetch_object($sql);
				
				 echo'<section class="tekst">';
				 
				if(isset($row))
				{
				
				 if($row->type == '4')
				 {
				
				
				
				  $sql = $mysqli->query("SELECT * FROM tuts WHERE id = '".$row->id."'") or die('error');
	        
			      if(mysqli_num_rows($sql) > 0)
			      {
			
		 		   echo'<dt><b>jQuery</b></dt>';
				   while($row = mysqli_fetch_object($sql))
				   {
				
                    echo'<dl>';
				  
				
		 			
		 		    echo'<dd><a href="./zoekresultaten.php?id='.$row->id.'&zoek='.$zoek.'&submit=1">'.$row->titel.'</a></dd>';
		 			
				
				
				    echo'</dl>';
		 		
				
				    }
				  }
				  echo'<br>';
				 }
				}
				
				if(isset($row))
				{
				
				 if($row->type == '3')
				 {
				
				
				
				  $sql = $mysqli->query("SELECT * FROM tuts WHERE id = '".$row->id."'") or die('error');
	        
			      if(mysqli_num_rows($sql) > 0)
			      {
			
		 		   echo'<dt><b>PHP</b></dt>';
				   while($row = mysqli_fetch_object($sql))
				   {
				
                    echo'<dl>';
				  
				
		 			
		 		    echo'<dd><a href="./zoekresultaten.php?id='.$row->id.'&zoek='.$zoek.'&submit=1">'.$row->titel.'</a></dd>';
		 		
				
				
				    echo'</dl>';
		 		
				
				    }
				  }
				  echo'<br>';
				 }
				}
				
				
				if(isset($row))
				{
				
				 if($row->type == '1')
				 {
				
				
				
				  $sql = $mysqli->query("SELECT * FROM tuts WHERE id = '".$row->id."'") or die('error');
	        
			      if(mysqli_num_rows($sql) > 0)
			      {
			
		 		   echo'<dt><b>HTML</b></dt>';
				   while($row = mysqli_fetch_object($sql))
				   {
				
                    echo'<dl>';
				  
				
		 			
		 		    echo'<dd><a href="./zoekresultaten.php?id='.$row->id.'&zoek='.$zoek.'&submit=1">'.$row->titel.'</a></dd>';
		 		
				
				
				    echo'</dl>';
		 		
				
				    }
				  }
				  echo'<br>';
				 }
				}
				
					if(isset($row))
				{
				
				 if($row->type == '2')
				 {
				
				
				
				  $sql = $mysqli->query("SELECT * FROM tuts WHERE id = '".$row->id."'") or die('error');
	        
			      if(mysqli_num_rows($sql) > 0)
			      {
			
		 		   echo'<dt><b>CSS</b></dt>';
				   while($row = mysqli_fetch_object($sql))
				   {
				
                    echo'<dl>';
				  
				
		 			
		 		    echo'<dd><a href="./zoekresultaten.php?id='.$row->id.'&zoek='.$zoek.'&submit=1">'.$row->titel.'</a></dd>';
		 		
				
				
				    echo'</dl>';
		 		
				
				    }
				  }
				  echo'<br>';
				 }
				}
				}
				}
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
		 			echo'<div style="margin-left:100px;"><section class="tekst">'.$row->bericht.'</section></div>';
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