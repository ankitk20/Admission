<form id="form" class="ui form" action="backend/databaseEntry.php" method="post" role="form">
    <!-- Metadata -->
    <input type="hidden" name="table" value="documents">
    <h3>Documents</h3>
    <div class="grouped fields">
        <div class="field">
            <div class="ui checkbox">
                <input name="documents" value="address" class="hidden" tabindex="0" type="checkbox" checked>
                <label>ADDRESS PROOF</label>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input name="documents" value="ssc" class="hidden" tabindex="0" type="checkbox" checked>
                <label>SSC</label>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input name="documents" value="hsc" class="hidden" tabindex="0" type="checkbox" checked>
                <label>HSC</label>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input name="documents" value="domicile" class="hidden" tabindex="0" type="checkbox" checked>
                <label>DOMICILE</label>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input name="documents" value="jee" class="hidden" tabindex="0" type="checkbox" checked>
                <label>JEE</label>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input name="documents" value="affidavit" class="hidden" tabindex="0" type="checkbox" checked>
                <label>AFFIDAVIT</label>
            </div>
        </div>
    </div>
    <br>
    <div class="required inline field">
        <div class="ui checkbox">
            <input name="terms" type="checkbox" required>
            <label>I Accept All Rules And All Documents Are Valid</label>
        </div>
    </div>
</form>
