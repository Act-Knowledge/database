<?php

require("./template/header.php");
require("./loginbeveiliging.php");

?>

	<div class="wrapper">

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
