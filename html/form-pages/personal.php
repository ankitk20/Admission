<link rel="stylesheet" href="../css/daterangepicker.min.css">
<!-- Name Section -->
<div class="three fields">
    <div class="field">
        <label for="fName">First Name</label>
        <input type="text" id="fName" name="fName" data-validate="name" required>
    </div>
    <div class="field">
        <label for="mName">Middle Name</label>
        <input type="text" id="mName" name="mName" data-validate="name" required>
    </div>
    <div class="field">
        <label for="lName">Last Name</label>
        <input type="text" id="lName" name="lName" data-validate="name" required>
    </div>
</div>
<div class="field">
    <label for="momName">Mother's name</label>
    <input type="text" id="momName" name="momName">
</div>
<!-- Address Section -->
<div class="field">
    <label for="address">Address</label>
    <textarea id="address" name="address" rows="4" required></textarea>
</div>
<div class="field">
    <label for="state">State</label>
    <select id="state" name="state" class="ui dropdown" required>
        <option selected></option>
        <option>Delhi</option>
        <option>Maharashtra</option>
    </select>
</div>
<div class="field">
    <label for="city">City</label>
    <select id="city" name="city" class="ui dropdown" required>
        <option selected></option>
        <option>Delhi</option>
        <option>Mumbai</option>
    </select>
</div>
<div class="field">
    <label for="pincode">Pin Code</label>
    <input id="pincode" name="pincode" type="text" required>
</div>
<div class="field">
    <label for="gender">Gender</label>
    <select id="gender" name="gender" class="ui dropdown" required>
        <option selected></option>
        <option>Male</option>
        <option>Female</option>
    </select>
</div>
<div class="field">
    <label for="dob">Date of Birth</label>
    <input id="dob" name="dob" type="text" readonly required>
</div>
<div class="field">
    <label for="religion">Religion</label>
    <input id="religion" name="religion" type="text" required>
</div>
<div class="field">
    <label for="mobNo">Mobile number</label>
    <div class="ui left labeled input">
        <div class="ui label">+ 91</div>
        <input id="mobNo" name="mobNo" type="text" required>
    </div>
</div>
<div class="field">
    <label for="email">E-mail Id</label>
    <input id="email" name="email" type="email" required>
</div>
<div class="field">
    <label for="altEmail">Alternate E-mail Id</label>
    <input id="altEmail" name="altEmail" type="email">
</div>
<div class="inline fields">
    <label>Category</label>
    <div class="field">
        <div class="ui radio checkbox">
            <input name="category" type="radio">
            <label>Open</label>
        </div>
    </div>
    <div class="field">
        <div class="ui radio checkbox">
            <input name="category" type="radio">
            <label>OBC</label>
        </div>
    </div>
    <div class="field">
        <div class="ui radio checkbox">
            <input name="category" type="radio">
            <label>SC</label>
        </div>
    </div>
    <div class="field">
        <div class="ui radio checkbox">
            <input name="category" type="radio">
            <label>ST</label>
        </div>
    </div>
    <div class="field">
        <div class="ui radio checkbox">
            <input name="category" type="radio">
            <label>Other</label>
        </div>
    </div>
</div>
<div class="field">
    <label for="photo">Photo</label>
    <input id="photo" name="photo" type="file" required>
    <div class="ui left labeled input">
        <label for="photo" class="ui basic label">Browse</label>
        <input readonly>
    </div>
</div>
<div class="field">
    <label for="sign">Signature</label>
    <input id="sign" name="sign" type="file" required>
    <div class="ui left labeled input">
        <label for="sign" class="ui basic label">Browse</label>
        <input readonly>
    </div>
</div>
<div class="field">
    <label for="fatherSign">Father's Signature</label>
    <input id="fatherSign" name="fatherSign" type="file" required>
    <div class="ui left labeled input">
        <label for="fatherSign" class="ui basic label">Browse</label>
        <input readonly>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
<script src="../js/daterangepicker.min.js"></script>
<script>
$(function() {
    $('select.dropdown').dropdown();
    $(':file').css('display', 'none').click().change(function() {
        $(this).next().children('input').val($(this).val());
    });
    $('#dob').daterangepicker({
        singleDatePicker: true,
        format: 'DD-MM-YYYY',
        minDate: moment().subtract(1, 'years').format('DD-MM-YYYY')
    }, function(date) {
        console.log("New date selected: " + date.format('Do of MMMM, YYYY'));
    });
});
</script>
