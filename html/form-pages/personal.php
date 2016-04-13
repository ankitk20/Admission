<form id="form" class="ui form" action="backend/databaseEntry.php" enctype="multipart/form-data" method="post" role="form">
    <!-- Metadata -->
    <input type="hidden" name="table" value="personal">
    <!-- Personal Details -->
    <div class="three fields">
        <div class="required field">
            <label for="fName">First Name</label>
            <input type="text" id="fName" name="fName" required>
        </div>
        <div class="required field">
            <label for="mName">Middle Name</label>
            <input type="text" id="mName" name="mName" required>
        </div>
        <div class="required field">
            <label for="lName">Last Name</label>
            <input type="text" id="lName" name="lName" required>
        </div>
    </div>
    <div class="two fields">
        <div class="required field">
            <label for="popName">Father's name</label>
            <input type="text" id="popName" name="popName" required>
        </div>
        <div class="required field">
            <label for="momName">Mother's name</label>
            <input type="text" id="momName" name="momName" required>
        </div>
    </div>
    <div class="required field">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" class="ui dropdown" required>
            <option selected></option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    </div>
    <div class="required field">
        <label for="dob">Date of Birth</label>
        <input id="dob" name="dob" type="text" readonly required>
    </div>
    <!-- Address Details -->
    <div class="required field">
        <label for="address">Address</label>
        <textarea id="address" name="address" required></textarea>
    </div>
    <div class="required field">
        <label for="state">State</label>
        <select id="state" name="state" class="ui dropdown" required>
            <option selected></option>
            <option>Delhi</option>
            <option>Maharashtra</option>
        </select>
    </div>
    <div class="required field">
        <label for="city">City</label>
        <select id="city" name="city" class="ui dropdown" required>
            <option selected></option>
            <option>Delhi</option>
            <option>Mumbai</option>
        </select>
    </div>
    <div class="required field">
        <label for="pincode">Pin Code</label>
        <input id="pincode" name="pincode" type="text" required>
    </div>
    <div class="required field">
        <label for="email">E-mail Id</label>
        <input id="email" name="email" type="text" required>
    </div>
    <div class="required field">
        <label for="altEmail">Alternate E-mail Id</label>
        <input id="altEmail" name="altEmail" type="text" required>
    </div>
    <div class="required field">
        <label for="mobNo">Mobile number</label>
        <div class="ui left labeled input">
            <div class="ui label">+ 91</div>
            <input id="mobNo" name="mobNo" type="text" required>
        </div>
    </div>
    <!-- Religion Details -->
    <div class="required field">
        <label for="religion">Religion</label>
        <input id="religion" name="religion" type="text" required>
    </div>
    <div class="inline fields">
        <label>Category</label>
        <div class="field">
            <div class="ui radio checkbox">
                <input name="category" value="Open" type="radio" checked>
                <label>Open</label>
            </div>
        </div>
        <div class="field">
            <div class="ui radio checkbox">
                <input name="category" value="OBC" type="radio">
                <label>OBC</label>
            </div>
        </div>
        <div class="field">
            <div class="ui radio checkbox">
                <input name="category" value="SC" type="radio">
                <label>SC</label>
            </div>
        </div>
        <div class="field">
            <div class="ui radio checkbox">
                <input name="category" value="ST" type="radio">
                <label>ST</label>
            </div>
        </div>
        <div class="field">
            <div class="ui radio checkbox">
                <input name="category" value="Other" type="radio">
                <label>Other</label>
            </div>
        </div>
    </div>
    <!-- Personal Photo Details -->
    <div class="required field">
        <label for="photo">Photo</label>
        <input id="photo" name="photo[]" type="file" accept=".jpeg, .png" style="display: none;" required>
        <div class="ui left labeled input">
            <label for="photo" class="ui basic label">Browse</label>
            <input readonly>
        </div>
    </div>
    <div class="required field">
        <label for="sign">Signature</label>
        <input id="sign" name="photo[]" type="file" accept=".jpeg, .png" style="display: none;" required>
        <div class="ui left labeled input">
            <label for="sign" class="ui basic label">Browse</label>
            <input readonly>
        </div>
    </div>
</form>
