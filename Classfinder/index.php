<?php
/* Setup */
include_once $_SERVER["DOCUMENT_ROOT"] . "Classfinder/include/includes.php";

$pageTitle = "Classfinder 2.0";

?>

<!DOCTYPE html>
<html>

<?php include_once "$docRoot/include/header.php"; ?>

<body>

    <?php
        include_once "$docRoot/include/sideNav.php";
        include_once "$docRoot/content.php";
    ?>

</body>
<?php include_once "$docRoot/include/jsInclude.php"; ?>

</html>
