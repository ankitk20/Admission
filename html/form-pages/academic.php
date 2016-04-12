<form id="form" class="ui form" action="backend/databaseEntry.php" method="post" role="form">
    <!-- Metadata -->
    <input type="hidden" name="table" value="academic">
    <h3>SSC</h3>
    <div class="required field">
        <label for="sscSchool">Name Of School</label>
        <input id="sscSchool" name="sscSchool" type="text" required>
    </div>
    <div class="required field">
        <label for="sscNo">Seat number</label>
        <input id="sscNo" name="sscNo" type="text" required>
    </div>
    <div class="required field">
        <label for="sscEng">English</label>
        <div class="ui right labeled input">
            <input id="sscEng" name="sscEng" type="text" required>
            <span class="ui label">/ 100</span>
        </div>
    </div>
    <div class="required field">
        <label for="sscMat">Mathematics</label>
        <div class="ui right labeled input">
            <input id="sscMat" name="sscMat" type="text" required>
            <span class="ui label">/ 150</span>
        </div>
    </div>
    <div class="required field">
        <label for="sscSci">Science</label>
        <div class="ui right labeled input">
            <input id="sscSci" name="sscSci" type="text" required>
            <span class="ui label">/ 150</span>
        </div>
    </div>
    <div class="field">
        <label for="sscObtMks">Marks Obtained</label>
        <div class="ui right labeled input">
            <input id="sscObtMks" name="sscObtMks" type="text" readonly>
            <span class="ui label">/ 400</span>
        </div>
    </div>
    <div class="field">
        <label for="sscPer">Percentage</label>
        <input id="sscPer" name="sscPer" type="text" readonly>
    </div>
    <div class="required field">
        <label for="sscBoard">Board Name</label>
        <input id="sscBoard" name="sscBoard" type="text" required>
    </div>
    <div class="required field">
        <label for="sscYear">Year Of Passing</label>
        <select id="sscYear" name="sscYear" class="ui dropdown" required>
            <option selected></option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
        </select>
    </div>
    <br/>
    <h3>HSC</h3>
    <div class="required field">
        <label for="hscSchool">Name Of College</label>
        <input id="hscSchool" name="hscSchool" type="text" required>
    </div>
    <div class="required field">
        <label for="hscNo">Seat number</label>
        <input id="hscNo" name="hscNo" type="text" required>
    </div>
    <div class="required field">
        <label for="hscEng">English</label>
        <div class="ui right labeled input">
            <input id="hscEng" name="hscEng" type="text" required>
            <span class="ui label">/ 100</span>
        </div>
    </div>
    <div class="required field">
        <label for="hscMat">Mathematics</label>
        <div class="ui right labeled input">
            <input id="hscMat" name="hscMat" type="text" required>
            <span class="ui label">/ 100</span>
        </div>
    </div>
    <div class="required field">
        <label for="hscPhy">Physics</label>
        <div class="ui right labeled input">
            <input id="hscPhy" name="hscPhy" type="text" required>
            <span class="ui label">/ 100</span>
        </div>
    </div>
    <div class="required field">
        <label for="hscChe">Chemistry</label>
        <div class="ui right labeled input">
            <input id="hscChe" name="hscChe" type="text" required>
            <span class="ui label">/ 100</span>
        </div>
    </div>
    <div class="field">
        <label for="hscVoc">CS / required Electronics / IT</label>
        <div class="ui right labeled input">
            <input id="hscVoc" name="hscVoc" type="text" required>
            <span class="ui label">/ 200</span>
        </div>
    </div>
    <div class="field">
        <label for="hscObtMks">Marks Obtained</label>
        <div class="ui right labeled input">
            <input id="hscObtMks" name="hscObtMks" type="text" class="hidden" readonly>
            <span class="ui label">/ 600</span>
        </div>
    </div>
    <div class="field">
        <label for="hscPer">Percentage</label>
        <input id="hscPer" name="hscPer" type="text" class="hidden" readonly>
    </div>
    <div class="required field">
        <label for="hscBoard">Board Name</label>
        <input id="hscBoard" name="hscBoard" type="text" required>
    </div>
    <div class="required field">
        <label for="hscYear">Year Of Passing</label>
        <select id="hscYear" name="hscYear" class="ui dropdown" required>
            <option selected></option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
        </select>
    </div>
    <br/>
    <h3>JEE</h3>
    <div class="required field">
        <label for="jeePhy">Physics</label>
        <div class="ui right labeled input">
            <input id="jeePhy" name="jeePhy" type="text" required>
            <span class="ui label">/ 120</span>
        </div>
    </div>
    <div class="required field">
        <label for="jeeChe">Chemistry</label>
        <div class="ui right labeled input">
            <input id="jeeChe" name="jeeChe" type="text" required>
            <span class="ui label">/ 120</span>
        </div>
    </div>
    <div class="required field">
        <label for="jeeMat">Mathematics</label>
        <div class="ui right labeled input">
            <input id="jeeMat" name="jeeMat" type="text" required>
            <span class="ui label">/ 120</span>
        </div>
    </div>
    <div class="field">
        <label for="jeeObtMks">Marks Obtained</label>
        <div class="ui right labeled input">
            <input id="jeeObtMks" name="jeeObtMks" type="text" readonly>
            <span class="ui label">/ 360</span>
        </div>
    </div>
    <div class="field">
        <label for="jeePer">Percentile</label>
        <input id="jeePer" name="jeePer" type="text" readonly>
    </div>
</form>
