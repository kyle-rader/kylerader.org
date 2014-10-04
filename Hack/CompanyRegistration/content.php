<div class="unit-rows">
    <div class="unit-60 unit-centered">
        <form class="forms" action="/Hack/CompanyRegistrationConfirm/" method="GET">
            <div class="units-row forms-row">
                <label class="unit-50">
                    Company <span class="forms-desc">(Who do you work for!)</span>
                    <input type="text" name="companyName" required />
                </label>
                <label class="unit-50">
                    Company Size
                    <input type="text" name="companySize" list="companySizes" required>
                    <datalist id="companySizes">
                        <option value="0 - 10"></option>
                        <option value="11 - 30"></option>
                        <option value="31 - 50"></option>
                        <option value="51 - 100"></option>
                        <option value="101 - 500"></option>
                        <option value="500 - 1000"></option>
                        <option value="1000+"></option>
                    </datalist>
                    <span class="forms-desc">Pick a size</span>
                </label>
            </div>
            <div class="units-row forms-row">
                <label class="unit-25">
                    Contact
                    <input type="text" name="contactName" required />
                    <span class="forms-desc">First and Last</span>
                </label>
                <label class="unit-25">
                    Contact Email
                    <input type="email" name="contactEmail" required />
                    <span class="forms-desc">you@company.com</span>
                </label>
                <label class="unit-50">
                    Sponsor Amount
                    <input type="text" name="sponsorPledge" list="sponsorAmounts" required>
                    <datalist id="sponsorAmounts">
                        <option value="$250"></option>
                        <option value="$500"></option>
                        <option value="$750"></option>
                        <option value="$1000"></option>
                        <option value="$1250"></option>
                        <option value="$1500"></option>
                    </datalist>
                    <span class="forms-desc">Help make this event awesome with an awesome donation!</span>
                </label>
            </div>
            <div class="units-row forms-row">
                <label class="unit-100">
                    Bringing any SWAG?
                    <input type="text" name="swag" />
                    <span class="forms-desc">Shirts, coffee cups, water bottles, etc - Anything you want!</span>
                </label>
            </div>
            <div class="units-row forms-row">
                <label class="unit-25">
                    Sending a Judge?
                    <input type="text" name="judgeName" />
                    <span class="forms-desc">Judge Name</span>
                </label>
                <label class="unit-25">
                    Judge Email
                    <input type="email" name="judgeEmail" />
                    <span class="forms-desc">judge@company.com</span>
                </label>
                <label class="unit-25">
                    Judge Position/ Role
                    <input type="text" name="judgePosition" />
                    <span class="forms-desc">Job Title</span>
                </label>
                <label class="unit-25">
                    Judge Attending Opening Lunch?
                    <input id="attendLunchCheck" type="checkbox" name="judgeAttendOpeningLunch">
                </label>
            </div>
            <div class="units-row">
                <input class="btn" type="submit" name="Submit" />
            </div>
        </form>
    </div>
</div>
