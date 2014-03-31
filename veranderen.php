<?php

require("./template/header.php");

require("./loginbeveiliging.php");




if(isset($_POST['submit']))
{
$titel = Security($_POST['title']);
$cata = Security($_POST['cata']);
$bericht = $_POST['bericht'];
$afb = Security($_POST['afbeelding']);
$vid = Security($_POST['vidlink']);
$id = Security($_POST['id']);
if(!trim($titel) || !trim($bericht) || !trim($id))
{

$error = "vul alles goed in!";

}
else
{
if($_POST['submit'] == "Verwijder")
{
$mysqli->query("DELETE FROM tuts WHERE id = '".$id."'");
echo ' <script> location.replace("./admin.php"); </script>';
die();
}
else
{
$mysqli->query("UPDATE tuts SET titel = '".$titel."', bericht = '".$bericht."', type = '".$cata."', videolink = '".$vid."', afbeelding = '".$afb."', auteur = '".User::getUserData("username")."' WHERE id = '".$id."'") OR die("mysql_error");
$error = "Succesvol Aangepast!";
}
}

}

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
					
			<form action="./veranderen.php?id=<?php echo $row->id; ?>" method="post">
			
					<input type="text" name="title" size="70" value="<?php echo $row->titel; ?>">
					<input type="hidden" name="id" value="<?php echo $row->id; ?>">

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
					<input type="submit" name="submit" value="Opslaan">
					<input type="submit" name="submit" value="Verwijder">
					<input type="reset">
					</div>
				</form>
				<br><br><br>
			</div> <!-- end post-form -->
	</div>

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
