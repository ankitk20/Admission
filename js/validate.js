var validationRules = {
    1: {
        name: {
            identifier: 'name',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'regExp[/^[a-zA-Z]{3,20}$/]',
                prompt: "Name should contain 3 to 20 alphabets"
            }]
        },
        pincode: {
            identifier: 'pincode',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'integer',
                prompt: "Pincode should contain digits only"
            }, {
                type: 'exactLength[6]',
                prompt: "Pincode should contain exactly 6 digits"
            }]
        },
        mobNo: {
            identifier: 'mobNo',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'integer',
                prompt: "Mobile number should contain digits only"
            }, {
                type: 'exactLength[10]',
                prompt: "Mobile number should contain exactly 10 digits"
            }]
        }
    },
    2: {
        marks_100: {
            identifer: 'marks-100',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'integer[1..100]',
                prompt: "Please enter any value between 1 and 100"
            }]
        },
        marks_120: {
            identifer: 'marks-120',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'integer[1..120]',
                prompt: "Please enter any value between 1 and 120"
            }]
        },
        marks_150: {
            identifer: 'marks-150',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'integer[1..150]',
                prompt: "Please enter any value between 1 and 150"
            }]
        },
        marks_200: {
            identifer: 'marks-200',
            rules: [{
                type: 'empty',
                prompt: "This field is required"
            }, {
                type: 'integer[1..200]',
                prompt: "Please enter any value between 1 and 200"
            }]
        }
    },
    3: {},
    4: {
        checkBox: {
            identifier: 'checkBox',
            rules: [{
                type: 'checked',
                prompt: "Please check this checkbox"
            }]
        }
    }
};

var validate = function(page) {
    console.log(page);
    console.log(validationRules[page]);
    $('#admForm').form({
        fields: validationRules[page],
        inline: true,
        on: 'blur'
    });
};
