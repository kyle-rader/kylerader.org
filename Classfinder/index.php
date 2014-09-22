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
			<?php
				include_once "$docRoot/include/topBar.php";
			?>
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
