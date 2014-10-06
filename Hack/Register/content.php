<div class="unit-rows">
    <div class="unit-60 unit-centered">
        <form class="forms" action="/Hack/RegistrationConfirm/" method="GET">
            <h4>Competitor Info </h4><small>If you created a team then you have already registered</small>
            <div class="units-row forms-row">
                <label class="unit-25">
                    First Name
                    <input type="text" name="firstName" required pattern="[a-zA-Z_]{1,}"/>
                </label>
                <label class="unit-25">
                    Last Name
                    <input type="text" name="lastName" required pattern="[a-zA-Z_]{1,}"/>
                </label>
                <label class="unit-50">
                    Email
                    <input type="email" name="email" required />
                </label>
            </div>
            <div class="units-row forms-row">
                <label class="unit-25">
                    Class
                    <select name="class" required>
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
                <label class="unit-25">
                    Where are you from?
                    <select name="school">
                        <option value="wwu_cs">WWU Computer Science</option>
                        <option value="wwu_id">WWU Industrial Design</option>
                        <option value="wcc">Whatcom Community College</option>
                        <option value="btc">Bellingham Technical College</option>
                    </select>
                </label>
            </div>
            <div class="units-row">
                <div class="unit-50">
                    <h4>Already have a team to join:</h4>
                    <div class="units-row forms-row">
                        <label class="unit-100">
                            Team Name <span class="forms-desc">All existing teams are shown</span>
                            <select name="teamId">
                                <option value="0">None</option>
                                <?php
                                foreach($teams as $id => $team) {
                                    print "<option value=\"$id\">{$team['teamName']} &nbsp;(Lead: {$team['teamLeadFirstName']} {$team['teamLeadLastName']})</option>";
                                }
                                ?>
                            </select>
                            <span class="forms-desc">Leave as "None" if you don't have a team just yet.</span>
                        </label>
                    </div>
                    <div class="units-row forms-row">
                        <label class="unit-100">
                            Team Code
                            <input type="password" name="teamCode" pattern="[a-zA-Z0-9!@#$%^&*()_+=-]{8,}">
                            <span class="forms-desc">The team lead will have created this when they made the team.</span>
                        </label>
                    </div>
                    <input class="btn" type="submit" name="Submit" />
                </div>
                <div class="unit-50">
                    <h4>Haven't found a team yet:</h4>
                    <p>No worries!  You don't need a team yet!  Submit your registration now and show up to the event!  <strong>Teams can form on the spot during opening lunch!</strong></p>
                    <p>If you find a team on or before Nov 1st simply come back here.  Register with your same info and a newly found team code and we will update your registration!</p>
                    <p>Or make a team now by clicking the button below!</p>
                    <a href="/Hack/TeamRegistration" class="btn btn-blue">Make a Team Now!</a>
                </div>
            </div>
        </form>
    </div>
</div>
