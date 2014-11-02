<?php
header("Location: https://" . $_SERVER['SERVER_NAME'] . "/Hackathon");
exit();
/* Setup */
include_once $_SERVER["DOCUMENT_ROOT"] . "/include/includes.php";
include_once "$docRoot/database/HackathonCompany.php";

$page = "Hack/CompanyRegistrationSubmit";
$pageTitle = "WWU CS Hackathon";

$success = isset($_GET['companyName']) &&
isset($_GET['contactName']) &&
isset($_GET['contactEmail']) &&
isset($_GET['companySize']) &&
isset($_GET['sponsorPledge']) &&
isset($_GET['swag']) &&
isset($_GET['judgeName']) &&
isset($_GET['judgeEmail']) &&
isset($_GET['judgePosition']);

$data = array();
$content = "";
if($success) {
    $data['id'] = 0;
    $data['companyName'] = $_GET['companyName'];
    $data['contactName'] = $_GET['contactName'];
    $data['contactEmail'] = $_GET['contactEmail'];
    $data['companySize'] = $_GET['companySize'];
    $data['sponsorPledge'] = $_GET['sponsorPledge'];
    $data['swag'] = $_GET['swag'];
    $data['judgeName'] = $_GET['judgeName'];
    $data['judgeEmail'] = $_GET['judgeEmail'];
    $data['judgePosition'] = $_GET['judgePosition'];
    $data['judgeAttendOpeningLunch'] = isset($_GET['judgeAttendOpeningLunch']) ? 'Yes' : 'No';
    $company = HackathonCompany::LoadCompanyFromName($mysqli, $data['companyName']);
    if($company != null) {
        $content = <<<EOT
<h3>Oops, {$company->companyName} is already registered!</h3>
EOT;
    } else if ((new HackathonCompany($data))->save($mysqli)) {
        $content = <<<EOT
<h3>{$data['companyName']}, Thank you for registering to participate in the Fall 2014 WWU CS Hackathon!</h3>
EOT;
    }
} else {
    $content = <<<EOT
<h3>Oops, There was a problem with your registration.</h3
<h4>Contact <a href=\"mailto:kyle.rader@ieee.org\">Kyle Rader</a> for assistance.
EOT;
}

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
                        <h3>WWU Fall Hackathon Company Registration</h3>
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

