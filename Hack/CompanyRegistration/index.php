<?php
/* Setup */
include_once $_SERVER["DOCUMENT_ROOT"] . "/include/includes.php";
$page = "Hack/CompanyRegistration";
$pageTitle = "WWU CS Hackathon";

?>

<!DOCTYPE html>
<html>

<?php include_once "$docRoot/include/header.php"; ?>

<body>

    <?php
        include_once "$docRoot/include/sideNav.php";
        include_once "$docRoot/Hack/CompanyRegistration/content.php";
    ?>

</body>
<?php include_once "$docRoot/include/jsInclude.php"; ?>

</html>

<?php include_once "$docRoot/include/dbEnd.php"; ?>
