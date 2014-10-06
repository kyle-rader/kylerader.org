<?php
/* Setup */
include_once $_SERVER["DOCUMENT_ROOT"] . "/include/includes.php";
$page = 'Resources';
$pageTitle = 'Resume';
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
			<div class="text-centered">
				<div class="units-row">
					<div class="unit-centered unit-80">
						<h2 class="">Resources + Cool Things</h2>
						<hr class="hr-bar-blue">
					</div>
				</div>
			</div>
		</div>

		<div id="content">
			<?php
	    		include_once "$docRoot/$page/content.php";
			?>
		</div>
    	<div id="footer">
	        <?php 
	        	include_once "$docRoot/include/footer.php";
	        ?>
    	</div>
    </div>
    <?php include_once "$docRoot/include/jsInclude.php"; ?>
</body>

</html>

<?php include_once "$docRoot/include/dbEnd.php"; ?>
