<?php

require("./template/header.php");

require("./loginbeveiliging.php");

if(isset($_GET['id']))
{
die('Geen geldig id');
}
else
{
$id = Security($_GET['id']);
$sql = $mysqli->query("SELECT * from tuts where id = '".id."' LIMIT 1");

if(mysqli_num_rows < 0)
{
die('Geen geldig id');
}

else
{

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
					
			<form action="toevoegen.php" method="post">
			
					<input type="text" name="title" size="70" placeholder="Titel hier">

                   <select name="cata">
						<option value="1">HTML</option>
						<option value="2">CSS</option>
						<option value="3">PHP</option>
						<option value="4">jQuery</option>
					</select>

					<? if (file_exists("ckeditor/ckeditor.js")): ?>
<textarea name="bericht" id="descr" style="width: 800px; height: 400px" rows="20"><? echo $descr; ?></textarea>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace( 'descr',
    {
     resize_enabled: true
    });
</script>
<? endif; ?>

					<input type="text" name="afbeelding" size="70" placeholder="Afbeelding link hier">
						<input type="text" name="vidlink" size="70" placeholder="Video link hier">
					
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
