<div class="units-row">
    <div class="unit-centered unit-60">
        <h3>Please confirm your information</h3>
        <ul class="list-flat list-spaced-large">
            <li>
                <h5 class="HeroLight blue-text">Team Name:</h5>
                <?php print "&nbsp;" . $_GET['teamName']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Team Code:</h5>
                <?php print "&nbsp;" . $_GET['teamCode']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Team Lead First Name:</h5>
                <?php print "&nbsp;" . $_GET['teamLeadFirstName']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Team Lead Last Name:</h5>
                <?php print "&nbsp;" . $_GET['teamLeadLastName']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Team Lead Email:</h5>
                <?php print "&nbsp;" . $_GET['teamLeadEmail']; ?>
            </li>
            <li>
                <h5 class="HeroLight blue-text">Team Lead Class:</h5>
                <?php print "&nbsp;" . $_GET['teamLeadClass']; ?>
            </li>
        </ul>
        <form class="forms" action="/Hack/TeamRegistrationSubmit" method="GET">
            <ul class="forms-inline-list">
                <li><a href="javascript: window.history.back();" class="btn btn-blue">Back</a></li>
                <li><input class="btn" type="submit" value="Confirm"></li>
            </ul>
            <input type="hidden" name="teamName" value="<?php print $_GET['teamName']; ?>">
            <input type="hidden" name="teamCode" value="<?php print $_GET['teamCode']; ?>">
            <input type="hidden" name="teamLeadFirstName" value="<?php print $_GET['teamLeadFirstName']; ?>">
            <input type="hidden" name="teamLeadLastName" value="<?php print $_GET['teamLeadLastName']; ?>">
            <input type="hidden" name="teamLeadEmail" value="<?php print $_GET['teamLeadEmail']; ?>">
            <input type="hidden" name="teamLeadClass" value="<?php print $_GET['teamLeadClass']; ?>">
        </form>
    </div>
</div>

