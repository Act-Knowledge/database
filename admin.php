<?php

require("./template/header.php");
require("./loginbeveiliging.php");

?>

	<div class="wrapper">
	<div class="rijadmin">
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
		 		
				}
				echo'</section>';
				}
				
				
				?>
				
				
			</div>
		</div>
	<div id="main">
	<?php echo "<center>Welkom ".User::getUserData('username').", hier kun je berichten toevoegen en aanpassen. Veel succes!<br><Br>"; ?>
			<div class="uploads">
			<center>
				<section class="load1"><img src="img/add/video.png" class="image"/></section>
				<section class="load2"><img src="img/add/foto.png" class="image"></section>
				<section class="load3"><img src="img/add/doc.png" class="image"></section>
	</center>
				<div class="columns">
					<a href="./toevoegen.php"><div class="col" id="one">
						<h3 class"title"><img class="icon" src="img/add/plus.png">Add video</h3>
					</div><!-- end col-one --></a>
<a href="./toevoegen.php">
					<div class="col" id="two">
						<h3 class"title"><img class="icon" src="img/add/plus.png">Add foto</h3></a>
					</div><!-- end col-two -->
<a href="./toevoegen.php">
					<div class="col" id="three">
						<h3 class"title"><img class="icon" src="img/add/plus.png">New article</h3></a>
					</div><!-- end col-three -->
				</div><!-- end columns -->
			</div><!-- end uploads-->

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
