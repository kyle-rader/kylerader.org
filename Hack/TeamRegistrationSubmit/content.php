<?php
$success = isset($_GET['teamName']) &&
isset($_GET['teamCode']) &&
isset($_GET['teamLeadFirstName']) &&
isset($_GET['teamLeadLastName']) &&
isset($_GET['teamLeadEmail']) &&
isset($_GET['teamLeadClass']) &&
strlen(trim($_GET['teamName'])) > 0 &&
strlen(trim($_GET['teamCode'])) >= 8 &&
strlen(trim($_GET['teamLeadFirstName'])) > 0 &&
strlen(trim($_GET['teamLeadLastName'])) > 0 &&
strlen(trim($_GET['teamLeadEmail'])) > 0 &&
strlen(trim($_GET['teamLeadClass'])) > 0;

$data = array();
$content = "";

if($success) {
    $data['id'] = 0;
    $data['teamName'] = $_GET['teamName'];
    $data['teamCode'] = $_GET['teamCode'];
    $data['teamLeadFirstName'] = $_GET['teamLeadFirstName'];
    $data['teamLeadLastName'] = $_GET['teamLeadLastName'];
    $data['teamLeadEmail'] = $_GET['teamLeadEmail'];
    $data['teamLeadClass'] = $_GET['teamLeadClass'];
    
    $team = Team::LoadTeamFromName($mysqli, $data['teamName']);
    if($team != null) {
        $content = <<<EOT
<h3>Oops, {$team->teamName} is already registered!</h3>
EOT;
    } else if ((new Team($data))->save($mysqli)) {
        $content = <<<EOT
<h3>SUCCESS!</h3>
<h3>{$data['teamName']},<br>Thank you for registering to compete in the Fall 2014 WWU CS Hackathon!</h3>
<h5>Your team code is: <strong>{$data['teamCode']}</strong>
</h5>
EOT;
    }
} else {
    $content = <<<EOT
<h3>Oops, There was a problem with your registration.</h3
<h4>Contact <a href=\"mailto:kyle.rader@ieee.org\">Kyle Rader</a> for assistance.
EOT;
}

?>

<div class="units-row">
    <div class="unit-80 unit-centered text-centered">
    <?php
    	print $content;
     ?>
     <a class="btn btn-blue" href="/Hack">Back to Hackathon Info</a>
    </div>
</div>
