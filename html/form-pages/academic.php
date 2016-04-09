<h3>SSC</h3>
<div class="field">
    <label for="sscSchool">Name Of School</label>
    <input id="sscSchool" type="text" required>
</div>
<div class="field">
    <label for="sscNo">Seat number</label>
    <input id="sscNo" type="text" required>
</div>
<div class="field">
    <label for="sscEng">English</label>
    <div class="ui right labeled input">
        <input id="sscEng" data-validate="marks_100" type="text" required>
        <span class="ui label">/ 100</span>
    </div>
</div>
<div class="field">
    <label for="sscMat">Mathematics</label>
    <div class="ui right labeled input">
        <input id="sscMat" data-validate="marks_100" type="text" required>
        <span class="ui label">/ 150</span>
    </div>
</div>
<div class="field">
    <label for="sscSci">Science</label>
    <div class="ui right labeled input">
        <input id="sscSci" data-validate="marks_150" type="text" required>
        <span class="ui label">/ 150</span>
    </div>
</div>
<div class="field">
    <label for="sscObtMks">Marks Obtained</label>
    <p id="sscObtMks"></p>
</div>
<div class="field">
    <label for="sscTotMks">Total Marks</label>
    <p id="sscTotMks">400</p>
</div>
<div class="field">
    <label for="sscPer">Percentage</label>
    <p id="sscPer"></p>
</div>
<div class="field">
    <label for="sscBoard">Board Name</label>
    <input id="sscBoard" type="text" required>
</div>
<div class="field">
    <label for="sscYear">Year Of Passing</label>
    <select id="sscYear" class="ui dropdown">
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
<div class="field">
    <label for="hscSchool">Name Of College</label>
    <input id="hscSchool" type="text" required>
</div>
<div class="field">
    <label for="hscNo">Seat number</label>
    <input id="hscNo" type="text" required>
</div>
<div class="field">
    <label for="hscEng">English</label>
    <div class="ui right labeled input">
        <input id="hscEng" data-validate="marks_100" type="text" required>
        <span class="ui label">/ 100</span>
    </div>
</div>
<div class="field">
    <label for="hscMat">Mathematics</label>
    <div class="ui right labeled input">
        <input id="hscMat" data-validate="marks_100" type="text" required>
        <span class="ui label">/ 100</span>
    </div>
</div>
<div class="field">
    <label for="hscPhy">Physics</label>
    <div class="ui right labeled input">
        <input id="hscPhy" data-validate="marks_100" type="text" required>
        <span class="ui label">/ 100</span>
    </div>
</div>
<div class="field">
    <label for="hscChe">Chemistry</label>
    <div class="ui right labeled input">
        <input id="hscChe" data-validate="marks_100" type="text" required>
        <span class="ui label">/ 100</span>
    </div>
</div>
<div class="field">
    <label for="hscVoc">CS / Electronics / IT</label>
    <div class="ui right labeled input">
        <input id="hscVoc" data-validate="marks_200" type="text" required>
        <span class="ui label">/ 200</span>
    </div>
</div>
<div class="field">
    <label for="hscObtMks">Marks Obtained</label>
    <p id="hscObtMks"></p>
</div>
<div class="field">
    <label for="hscTotMks">Total Marks</label>
    <p id="hscTotMks">600</p>
</div>
<div class="field">
    <label for="hscPer">Percentage</label>
    <p id="hscPer"></p>
</div>
<div class="field">
    <label for="hscBoard">Board Name</label>
    <input id="hscBoard" type="text" required>
</div>
<div class="field">
    <label for="hscYear">Year Of Passing</label>
    <select id="hscYear" class="ui dropdown">
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
<div class="field">
    <label for="jeePhy">Physics</label>
    <div class="ui right labeled input">
        <input id="jeePhy" data-validate="marks_120" type="text" required>
        <span class="ui label">/ 120</span>
    </div>
</div>
<div class="field">
    <label for="jeeChe">Chemistry</label>
    <div class="ui right labeled input">
        <input id="jeeChe" data-validate="marks_120" type="text" required>
        <span class="ui label">/ 120</span>
    </div>
</div>
<div class="field">
    <label for="jeeMat">Mathematics</label>
    <div class="ui right labeled input">
        <input id="jeeMat" data-validate="marks_120" type="text" required>
        <span class="ui label">/ 120</span>
    </div>
</div>
<div class="field">
    <label for="jeeObtMks">Marks Obtained</label>
    <p id="jeeObtMks"></p>
</div>
<div class="field">
    <label for="jeeTotMks">Total Marks</label>
    <p id="jeeTotMks">360</p>
</div>
<div class="field">
    <label for="jeePer">Percentile</label>
    <input id="jeePer" class="number" type="text" required>
</div>
<script>
$(function() {
    $('select.dropdown').dropdown();
});
</script>
