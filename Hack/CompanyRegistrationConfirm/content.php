<div id="mainWrapper" class="dark-bg">
    <div id="header" >
        <div class="row center-text">
            <div class="small-12 columns">
                <h1>WWU Fall Hackathon Company Registration</h1>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="row dark-bg">
            <h3>Please confirm your information</h3>
            <hr>

            <span class="HeroLight"><h5 class="green-text">Company:</h5></span>
            <?php print $_GET['companyName']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Contact Name:</h5></span>
            <?php print $_GET['contactName']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Contact Email:</h5></span>
            <?php print $_GET['contactEmail']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Company Size:</h5></span>
            <?php print $_GET['companySize']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Sponsor Pledge:</h5></span>
            <?php print $_GET['sponsorPledge']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Swag:</h5></span>
            <?php print $_GET['swag']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Judge Name:</h5></span>
            <?php print $_GET['judgeName']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Judge Email:</h5></span>
            <?php print $_GET['judgeEmail']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Judge Position:</h5></span>
            <?php print $_GET['judgePosition']; ?>
            <br>
            <span class="HeroLight"><h5 class="green-text">Judge Attending Opening Lunch:</h5></span>
            <?php print isset($_GET['judgeAttendOpeningLunch']) && $_GET['judgeAttendOpeningLunch'] == 'on' ? 'Yes' : 'No'; ?>
            <hr>
            <form action="/Hack/CompanyRegistrationSubmit" method="GET">
                <input class="button" type="submit" value="Submit">
                <input type="hidden" name="comapnyName" value="<?php print $_GET['companyName']; ?>">
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
        </div>
    </div>
    <div id="footer">
        <?php include_once "$docRoot/include/footer.php"; ?>
    </div>
</div>
