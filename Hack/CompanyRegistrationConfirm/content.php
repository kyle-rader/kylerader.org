<div class="units-row">
    <div class="unit-centered unit-80">
        <h3>Please confirm your information</h3>
        <hr>

        <span class="HeroLight"><h5 class="blue-text">Company:</h5></span>
        <?php print $_GET['companyName']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Contact Name:</h5></span>
        <?php print $_GET['contactName']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Contact Email:</h5></span>
        <?php print $_GET['contactEmail']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Company Size:</h5></span>
        <?php print $_GET['companySize']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Sponsor Pledge:</h5></span>
        <?php print $_GET['sponsorPledge']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Swag:</h5></span>
        <?php print $_GET['swag']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Judge Name:</h5></span>
        <?php print $_GET['judgeName']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Judge Email:</h5></span>
        <?php print $_GET['judgeEmail']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Judge Position:</h5></span>
        <?php print $_GET['judgePosition']; ?>
        <br>
        <span class="HeroLight"><h5 class="blue-text">Judge Attending Opening Lunch:</h5></span>
        <?php print isset($_GET['judgeAttendOpeningLunch']) && $_GET['judgeAttendOpeningLunch'] == 'on' ? 'Yes' : 'No'; ?>
        <hr>
        <form class="forms" action="/Hack/CompanyRegistrationSubmit" method="GET">
            <ul class="forms-inline-list">
                <li><a href="javascript: window.history.back();" class="btn btn-blue">Back</a></li>
                <li><input class="btn" type="submit" value="Confirm"></li>
            </ul>
            <input type="hidden" name="companyName" value="<?php print $_GET['companyName']; ?>">
            <input type="hidden" name="contactName" value="<?php print $_GET['contactName']; ?>">
            <input type="hidden" name="contactEmail" value="<?php print $_GET['contactEmail']; ?>">
            <input type="hidden" name="companySize" value="<?php print $_GET['companySize']; ?>">
            <input type="hidden" name="sponsorPledge" value="<?php print $_GET['sponsorPledge']; ?>">
            <input type="hidden" name="swag" value="<?php print $_GET['swag']; ?>">
            <input type="hidden" name="judgeName" value="<?php print $_GET['judgeName']; ?>">
            <input type="hidden" name="judgeEmail" value="<?php print $_GET['judgeEmail']; ?>">
            <input type="hidden" name="judgePosition" value="<?php print $_GET['judgePosition']; ?>">
            <?php if (isset($_GET['judgeAttendOpeningLunch']) && $_GET['judgeAttendOpeningLunch'] == 'on') {?>
                <input type="hidden" name="judgeAttendOpeningLunch" value="<?php print $_GET['judgeAttendOpeningLunch']; ?>">
            <?php } ?>
        </form>
    </div>
</div>

