<?php
/* Setup */
include_once $_SERVER["DOCUMENT_ROOT"] . "/include/includes.php";
include_once "$docRoot/database/Team.php";
include_once "$docRoot/database/Competitor.php";

$page = "Hack/RegisterSubmit";
$pageTitle = "WWU CS Hackathon";

$hasArgs = isset($_GET['firstName'])
&& isset($_GET['lastName'])
&& isset($_GET['email'])
&& isset($_GET['class'])
&& isset($_GET['school'])
&& isset($_GET['teamId'])
&& isset($_GET['teamCode']);
if (!$hasArgs) {
    header("Location: /Hack");
    exit();
}

$competitor = Competitor::LoadCompetitorFromEmail($mysqli, $_GET['email']);
$team = Team::LoadTeamFromId($mysqli, $_GET['teamId']);
$teamCodeCorrect = $team != null ? $team->checkTeamCode($_GET['teamCode']) : false;

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
                        <h3>WWU Fall Hackathon Team Registration</h3>
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
