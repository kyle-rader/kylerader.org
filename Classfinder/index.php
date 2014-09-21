<?php
/* Setup */
include_once $_SERVER["DOCUMENT_ROOT"] . "Classfinder/include/includes.php";

$pageTitle = 'Home';
?>

<!DOCTYPE html>
<html>

<?php include_once "$docRoot/include/head.php"; ?>

<body>

	<?php 
		include_once "$docRoot/include/sideNav.php";
	?>
	<div id="mainWrapper">
		<div id="header">
			<h3>A BETTER CLASSFINDER <small>by Kyle W Rader</small></h3>
		</div>
		<div id="content">
			<?php
	    		include_once "$docRoot/content.php";
			?>
		</div>
    	<div id="footer" class="ts-white">
	        <?php 
	        	include_once "$docRoot/include/footer.php";
	        ?>
    	</div>
    </div>
    <?php include_once "$docRoot/include/jsInclude.php"; ?>
</body>

</html>
