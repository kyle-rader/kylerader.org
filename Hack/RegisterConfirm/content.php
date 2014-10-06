<div class="units-row">
    <div class="unit-centered unit-60">
        <h3>Please confirm your information</h3>
        <?php
        if ($competitor != null) {
            print "<h4>We have {$competitor->email} registered and will be updating your information</h4>";
        }
        ?>
        <ul class="list-flat list-spaced-large">
            <li>
                <h5 class="HeroLight blue-text">First Name:</h5>
                <?php print "&nbsp;" . $_GET['firstName']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Last Name:</h5>
                <?php print "&nbsp;" . $_GET['lastName']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Email:</h5>
                <?php print "&nbsp;" . $_GET['email']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Class:</h5>
                <?php print "&nbsp;" . $_GET['class']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">School:</h5>
                <?php print "&nbsp;" . $_GET['school']; ?>
            </li>

            <?php
                if ($team !== null) {
            ?>
            <li>
                <h5 class="HeroLight blue-text">Team:</h5>
                <?php print "&nbsp;" . $team->teamName; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Team Code:</h5>
                <?php 
                    print "&nbsp;";
                    if ($teamCodeCorrect) {
                        print "<span class=\"green-text\">Code Correct!</span>";
                    }
                    else {
                        print "<span class=\"red-text\">Code Not Correct!</span>";
                    }
                ?>
            </li>
            <?php
                } else {
            ?>
            <li>
                <h5 class="HeroLight blue-text">Team:</h5>
                No team yet
            </li>
            <?php
                }
            ?>
        </ul>
        <?php
        if ($teamCodeCorrect || $team == null) {
        ?>
        <form class="forms" action="/Hack/TeamRegistrationSubmit" method="GET">
            <input class="btn" type="submit" value="Confirm">
            <input type="hidden" name="firstName" value="<?php print $_GET['firstName']; ?>">
            <input type="hidden" name="lastName" value="<?php print $_GET['lastName']; ?>">
            <input type="hidden" name="email" value="<?php print $_GET['email']; ?>">
            <input type="hidden" name="class" value="<?php print $_GET['class']; ?>">
            <input type="hidden" name="school" value="<?php print $_GET['school']; ?>">
        <?php if ($teamCodeCorrect) { ?>
            <input type="hidden" name="teamId" value="<?php print $_GET['teamId']; ?>">
        <?php } ?>
        </form>
        <?php
        } else {
            print <<<EOT
<a href="javascript: window.history.back();" class="btn btn-blue">Back</a>
EOT;
        }
        ?>
    </div>
</div>

