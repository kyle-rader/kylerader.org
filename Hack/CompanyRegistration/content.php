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
            <form action="/Hack/CompanyRegistrationConfirm/" method="GET">
                <div class="row">
                    <div class="large-centered large-8 small-12 columns">
                        <div class="row collapse">
                            <div class="small-4 columns">
                                <span class="prefix"><i class="fi-torsos-all"></i></span>
                            </div>
                            <div class="small-8 columns">
                                <input type="text" name="companyName" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-4 columns">
                                <span class="prefix"><i class="fi-torso"></i></span>
                            </div>
                            <div class="small-8 columns">
                                <input type="text" name="contactName" placeholder="Contact Name (First Last) " required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-4 columns">
                                <span class="prefix"><i class="fi-mail"></i></span>
                            </div>
                            <div class="small-8 columns">
                                <input type="email" name="contactEmail" placeholder="contact@company.com" required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns">
                                <span class="prefix"><i class="fi-address-book"></i></span>
                            </div>
                            <div class="small-3 columns">
                                <input type="text" name="companySize" placeholder="Company Size" list="companySizes" required>
                                <datalist id="companySizes">
                                    <option value="0 - 10">
                                    <option value="11 - 30">
                                    <option value="31 - 50">
                                    <option value="51 - 100">
                                    <option value="101 - 500">
                                    <option value="500 - 1000">
                                    <option value="1000+">
                                </datalist>
                            </div>
                            <div class="small-offset-2 small-2 columns">
                                <span class="prefix"><i class="fi-dollar"></i><i class="fi-dollar"></i></span>
                            </div>
                            <div class="small-3 columns">
                                <input type="text" name="sponsorPledge" placeholder="Sponsor Amount" list="sponsorAmounts" required>
                                <datalist id="sponsorAmounts">
                                    <option value="$250">
                                    <option value="$500">
                                    <option value="$750">
                                    <option value="$1000">
                                    <option value="$1250">
                                    <option value="$1500">
                                </datalist>
                            </div>
                        </div>
                        <div class="row collapse">
                            <h5>Bringing any SWAG?</h5>
                            <input type="text" name="swag" placeholder="Shirts, coffee cups, water bottles, etc">
                        </div>
                        <div class="row collapse">
                            <h5>Sending a JUDGE?</h5>
                            <div class="small-4 columns">
                                <span class="prefix"><i class="fi-torso"></i></span>
                            </div>
                            <div class="small-8 columns">
                                <input type="text" name="judgeName" placeholder="Judge Name">
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-4 columns">
                                <span class="prefix"><i class="fi-mail"></i></span>
                            </div>
                            <div class="small-8 columns">
                                <input type="email" name="judgeEmail" placeholder="judge@company.com">
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-4 columns">
                                <span class="prefix"><i class="fi-torso-business"></i></span>
                            </div>
                            <div class="small-8 columns">
                                <input type="text" name="judgePosition" placeholder="Position in company">
                            </div>
                        </div>
                        <div class="row collapse">
                           <input id="attendLunchCheck" type="checkbox" name="judgeAttendOpeningLunch">
                           <label for="attendLunchCheck">Judge attending opening lunch? (Sat Nov 1st 11:00 AM)</label>
                        </div>
                        <div class="row collapse">
                           <input class="button" type="submit" name="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="footer">
        <?php include_once "$docRoot/include/footer.php"; ?>
    </div>
</div>
