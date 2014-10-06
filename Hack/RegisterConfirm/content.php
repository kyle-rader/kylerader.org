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
                <?php print "&nbsp;" . ($competitor == null ? $_GET['firstName'] : $competitor->firstName) ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Last Name:</h5>
                <?php print "&nbsp;" . ($competitor == null ? $_GET['lastName'] : $competitor->lastName); ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Email:</h5>
                <?php print "&nbsp;" . ($competitor == null ? $_GET['email'] : $competitor->email); ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Class:</h5>
                <?php print "&nbsp;" . ($competitor == null ? $_GET['class'] : $competitor->class); ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">School:</h5>
                <?php print "&nbsp;" . ($competitor == null ? $_GET['school'] : $competitor->school); ?>
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
        <form class="forms" action="/Hack/RegisterSubmit" method="GET">
            <ul class="forms-inline-list">
                <li><a href="javascript: window.history.back();" class="btn btn-blue">Back</a></li>
                <li><input class="btn" type="submit" value="Confirm"></li>
            </ul>
            <input type="hidden" name="firstName" value="<?php print $_GET['firstName']; ?>">
            <input type="hidden" name="lastName" value="<?php print $_GET['lastName']; ?>">
            <input type="hidden" name="email" value="<?php print $_GET['email']; ?>">
            <input type="hidden" name="class" value="<?php print $_GET['class']; ?>">
            <input type="hidden" name="school" value="<?php print $_GET['school']; ?>">
            <input type="hidden" name="teamId" value="<?php print $_GET['teamId']; ?>">
            <input type="hidden" name="teamCode" value="<?php print $_GET['teamCode']; ?>">
        </form>
        <?php } ?>
    </div>
</div>

