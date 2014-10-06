<div class="unit-rows">
    <div class="unit-60 unit-centered">
        <form class="forms" action="/Hack/TeamRegistrationConfirm/" method="GET">
        <h4>Team Info</h4>
            <div class="units-row forms-row">
                <label class="unit-50">
                    Team Name <span class="forms-desc">( Keep it PG )</span>
                    <input type="text" name="teamName" required pattern="[a-zA-Z_-!@#$%^&*()+=][a-zA-Z_-!@#$%^&*()+=]*" />
                    <span class="forms-desc">This could be your project/ product name</span>
                </label>
                <label class="unit-50">
                    Team Code <span class="forms-desc">Other team members will need this to register</span>
                    <input type="text" name="teamCode" required pattern="[a-zA-Z0-9!@#$%^&*()_+=-]{8,}">
                    <span class="forms-desc">Must be at least 8 characters. (Letters, numbers, and any of !@#$%^&*()_+=-)</span>
                </label>
            </div>
            <h4>Team Lead</h4>
            <div class="units-row forms-row">
                <label class="unit-25">
                    First Name
                    <input type="text" name="teamLeadFirstName" required pattern="[a-zA-Z_-!@#$%^&*()+=][a-zA-Z_-!@#$%^&*()+=]*"/>
                </label>
                <label class="unit-25">
                    Last Name
                    <input type="text" name="teamLeadLastName" required pattern="[a-zA-Z_-!@#$%^&*()+=][a-zA-Z_-!@#$%^&*()+=]*"/>
                </label>
                <label class="unit-50">
                    Email
                    <input type="email" name="teamLeadEmail" required />
                </label>
            </div>
            <div class="units-row forms-row">
                <label class="unit-50">
                    Class
                    <select name="teamLeadClass" required>
                        <optgroup label="Undergraduate">
                            <option value="Freshmen">Freshmen</option>
                            <option value="Sophomore">Sophomore</option>
                            <option value="Junior">Junior</option>
                            <option value="Senior">Senior</option>
                        </optgroup>
                        <optgroup label="Graduate">
                            <option value="Masters">Masters</option>
                        </optgroup>
                    </select>
                </label>
            </div>
            <div class="units-row">
                <input class="btn" type="submit" name="Submit" />
            </div>
        </form>
    </div>
</div>
