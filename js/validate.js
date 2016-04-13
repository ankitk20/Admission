var validationRules = {

    // Personal Details
    fName: ['empty', 'regExp[/^[a-zA-Z]{3,20}$/]'],
    mName: ['empty', 'regExp[/^[a-zA-Z]{3,20}$/]'],
    lName: ['empty', 'regExp[/^[a-zA-Z]{3,20}$/]'],
    popName: ['empty', 'regExp[/^[a-zA-Z]{3,20}$/]'],
    momName: ['empty', 'regExp[/^[a-zA-Z]{3,20}$/]'],
    gender: 'empty',
    dob: 'empty',

    // Address Details
    address: ['empty', 'maxLength[100]'],
    state: 'empty',
    city: 'empty',
    pincode: ['empty', 'integer', 'exactLength[6]'],
    email: ['empty', 'email'],
    altEmail: ['empty', 'email', 'different[email]'],
    mobNo: ['empty', 'integer', 'exactLength[10]'],

    // Religion Details
    religion: 'empty',

    // Personal Photo Details
    photo: 'empty',
    sign: 'empty',

    // SSC Details
    sscSchool: 'empty',
    sscNo: 'empty',
    sscEng: ['empty', 'integer[1..100]'],
    sscMat: ['empty', 'integer[1..150]'],
    sscSci: ['empty', 'integer[1..150]'],
    sscBoard: 'empty',
    sscYear: 'empty',

    // HSC Details
    hscSchool: 'empty',
    hscNo: 'empty',
    hscEng: ['empty', 'integer[1..100]'],
    hscMat: ['empty', 'integer[1..100]'],
    hscPhy: ['empty', 'integer[1..100]'],
    hscChe: ['empty', 'integer[1..100]'],
    hscVoc: ['empty', 'integer[1..200]'],
    hscBoard: 'empty',
    hscYear: 'empty',

    // JEE Details
    jeePhy: ['empty', 'integer[1..120]'],
    jeeChe: ['empty', 'integer[1..120]'],
    jeeMat: ['empty', 'integer[1..120]'],

    // Documents
    terms: 'checked'

};

var prompts = {
    empty: '{name} is required',
    checked: 'You must accept the terms and conditions',
    regExp: '{name} must be 3 to 20 characters long',
    integer: '{name} must contain only digits of specified range',
};

function initForm() {
    $('#form').form({
        fields: validationRules,
        prompt: prompts,
        inline: true,
        on: 'change'
    });
}

function validate() {
    initForm();
    return $('#form').form('is valid');
}
