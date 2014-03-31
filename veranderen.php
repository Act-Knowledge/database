<?php

require("./template/header.php");

require("./loginbeveiliging.php");

if(!isset($_GET['id']))
{
die('Geen geldig id');
}
else
{
$id = Security($_GET['id']);
$sql = $mysqli->query("SELECT * from tuts where id = '".$id."' LIMIT 1");

if(mysqli_num_rows($sql) < 0)
{
die('Geen geldig id');
}

else
{
$row = mysqli_fetch_object($sql);
}



}

?>

	<div class="wrapper">

	<div id="main">
	
	
			<div class="form">
			
					<?php if(isset($error))
					{
					
					echo "<br><center><b>".$error."</b></center><br>";
					}
					?>
					
			<form action="verander.php" method="post">
			
					<input type="text" name="title" size="70" value="<?php echo $row->titel; ?>">

                   <select name="cata">
				   <?php
				   if($row->type == '1')
				   {
						echo'<option value="1">HTML</option>';
				   }
                   else if($row->type == '2')
                   {				   
						echo'<option value="2">CSS</option>';
				   }
				   else if($row->type == '3')	
				   {
						echo'<option value="3">PHP</option>';
				   }
				   else if($row->type == '4')	
				   {
					echo'<option value="4">jQuery</option>';
				   }
				   ?>
					</select>

					<? if (file_exists("ckeditor/ckeditor.js")): ?>
<textarea name="bericht" id="descr" style="width: 800px; height: 400px" rows="20"><?php echo $row->bericht; ?></textarea>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace( 'descr',
    {
     resize_enabled: true
    });
</script>
<? endif; ?>

					<?php
					
					if(!trim($row->afbeelding))
					{
			         echo	'<input type="text" name="afbeelding" size="70" placeholder="Afbeelding link hier">';
					}
					else
					{
					 echo	'<input type="text" name="afbeelding" size="70" value="'.$row->afbeelding.'">';
					}
					
					
					if(!trim($row->videolink))
					{
			         echo	'<input type="text" name="vidlink" size="70" placeholder="Video link hier">';
					}
					else
					{
					 echo	'<input type="text" name="vidlink" size="70" value="'.$row->videolink.'">';
					}
					
					?>
						
					
					<div class="enter">
					<input type="submit" name="submit" value="submit">
					<input type="reset">
					</div>
				</form>
			</div> <!-- end post-form -->
	</div>

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
