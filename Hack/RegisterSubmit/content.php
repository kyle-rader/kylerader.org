<?php

$success = strlen(trim($_GET['firstName'])) > 0 &&
strlen(trim($_GET['lastName'])) >= 0 &&
strlen(trim($_GET['email'])) > 0 &&
strlen(trim($_GET['class'])) > 0 &&
strlen(trim($_GET['school'])) > 0;

$data = array();
$content = <<<EOT
<h3>Oops, There was a problem with your registration.</h3
<h4>Contact <a href=\"mailto:kyle.rader@ieee.org\">Kyle Rader</a> for assistance.
EOT;

if($success) {
    $data['id'] = 0;
    $data['firstName'] = trim($_GET['firstName']);
    $data['lastName'] = trim($_GET['lastName']);
    $data['email'] = trim($_GET['email']);
    $data['class'] = trim($_GET['class']);
    $data['school'] = trim($_GET['school']);
    $data['teamId'] = $teamCodeCorrect ? $team->id : 0;
    
    if ($competitor == null) {
        $competitor = new Competitor($data);
        if ($competitor->save($mysqli)) {
            $content = <<<EOT
<h3>{$competitor->firstName}, thank you for registering to compete in the Fall 2014 WWU CS Hackathon!</h3>
EOT;
            $content .= $teamCodeCorrect ? "<h4>You have joined the team: {$team->teamName}</h4>" : 
            "<h5>You have not joined a team yet!  Be sure to ask around and find friends to join or make a team with!<br>Come to the info session on Oct 14th 5:00 pm in CF 105 or show up at opening lunch to network and find a potential team!</h5>";
        }
    } else if ($teamCodeCorrect) {
        $competitor->teamId = $team->id;
        if ($competitor->updateTeam($mysqli)) {
            $content = <<<EOT
<h3>{$competitor->firstName}, you have successfully joined the team {$team->teamName}!</h3>
EOT;
        }
    } else {
        $content = <<<EOT
<h3>Oops! Update Failed.<br><strong>{$competitor->email}</strong>, is already registered <br>and that team code was incorrect.</h3>
EOT;
    }
}

?>

<div class="units-row">
    <div class="unit-80 unit-centered text-centered">
    <?php
    	print $content;
     ?>
    </div>
</div>
