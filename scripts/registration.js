// elements variables
const reg_form = document.getElementById("reg-form");
const reg_name = document.getElementById("reg-name");
const reg_username = document.getElementById("reg-username");
const reg_email = document.getElementById("reg-email");
const reg_password = document.getElementById("reg-password");
const reg_password_repeat = document.getElementById("reg-password-repeat");
const reg_conditions = document.getElementById("reg-conditions");

// validation variables
let valid_reg_name = false;
let valid_reg_username = false;
let valid_reg_email = false;
let valid_reg_password = false;
let valid_reg_password_repeat = false;
let valid_reg_conditions = false;

// validation variables
let valid_reg_name_message;
let valid_reg_username_message;
let valid_reg_email_message;
let valid_reg_password_message;
let valid_reg_password_repeat_message;
let valid_reg_conditions_message;

reg_form.addEventListener('submit', e => {
    console.log("----------------------------------");
    checkUserInputs();

    e.preventDefault()
})

function checkUserInputs() {
    
    // value => get value from input
    // trim => remove whitespaces
    // checked => false/true if checkbox is checked
    const reg_name_value = reg_name.value.trim();
    const reg_username_value = reg_username.value.trim(); 
    const reg_email_value = reg_email.value.trim();
    const reg_password_value =  reg_password.value.trim();
    const reg_password_repeat_value = reg_password_repeat.value.trim();
    const reg_conditions_value = reg_conditions.checked;

    let name = checkName(reg_name_value);
    valid_reg_name = name[0];
    valid_reg_name_message = name[1];

    let username = checkUsername(reg_username_value);
    valid_reg_username = username[0];
    valid_reg_username_message = username[1];
    
    let email = checkEmail(reg_email_value);
    valid_reg_email = email[0];
    valid_reg_email_message = email[1];

    let password = chceckPassword(reg_password_value);
    valid_reg_password = password[0];
    valid_reg_password_message = password[1];

    let password_repeat = chceckPasswordRepeat(reg_password_value, reg_password_repeat_value);
    valid_reg_password_repeat = password_repeat[0];
    valid_reg_password_repeat_message = password_repeat[1];

    let conditions = checkConditions(reg_conditions_value);
    valid_reg_conditions = conditions[0];
    valid_reg_conditions_message = conditions[1];


    console.log(valid_reg_name + " name");
    console.log(valid_reg_name_message + " name msg");

    console.log(valid_reg_username + " username");
    console.log(valid_reg_username_message + " username msg");
    
    console.log(valid_reg_email + " email");
    console.log(valid_reg_email_message + " email msg");
    
    console.log(valid_reg_password + " password");
    console.log(valid_reg_password_message + " password msg");
    
    console.log(valid_reg_password_repeat + " password repeat");
    console.log(valid_reg_password_repeat_message + " password repeat msg");
    
    console.log(valid_reg_conditions + " conditions");
    console.log(valid_reg_conditions_message + " conditions msg");
}


function checkName(name) {
    if (name === '') {
        let message = 'Plese fill in the name';
        return [false, message];    
    } else {
        return [true, false];
    }
}

function checkUsername(username) {
    whitespace = /\s/;
    if (username === '') {
        let message = 'Plese fill in the username';
        return [false, message];     
    }  else if (whitespace.test(username)){
        let message = 'Please fill without whitespaces';
        return [false, message];  
    } else {
        return [true, false];
    }
}

function checkEmail(email) {
    if (email === '') {
        let message = 'Please fill in the email'; 
        return [false, message];    
    } else if (!isEmail(email)) {
        let message = 'Email is not valid'; 
        return [false, message];    
    } else {
        return [true, false];
    }
}

function chceckPassword(password) {
    // regular expressions for password
    let uppercase_letters = /[A-Z]/g;
    let lowercase_letters = /[a-z]/g;
    let numbers = /[0-9]/g;
    let special_characters = /[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]/g;
    
    if (password === '') {
        let message = 'Please fill in the password'; 
        return [false, message]; 
    } else if (password.length <= 8 ) {
        let message = 'Password have to be at least 8 characters long'; 
        return [false, message]; 
    } else if (!password.match(lowercase_letters)) {
        let message = 'Password must have at leat one lowercase letter'; 
        return [false, message];
    } else if (!password.match(uppercase_letters)) {
        let message = 'Password must have at leat one uppercase letter'; 
        return [false, message];
    } else if (!password.match(numbers)) {
        let message = 'Password must have at leat one number'; 
        return [false, message];
    } else if (!password.match(special_characters)) {
        let message = 'Password must have at leat one special character'; 
        return [false, message];
    } else {
        return [true, false]
    }
}

function chceckPasswordRepeat(password, password_repeat) {
    if (password_repeat === '') {
        let message = 'Please fill in the password';
        return [false, message]; 
    } else if (password !== password_repeat) {
        let message = 'Not matching passwords'; 
        return [false, message]; 
    } else {
        return [true, false];
    }
}

function checkConditions(conditions) {
    if (!conditions) {
        let message = 'You have to accept the conditions';
        return [false, message]; 
    } else {
        return [true, false];
    }
}

function setErrorFor(input) {
    input.classList.toggle("client-error-input");
}

function setSuccessFor(input) {
    input.classList.toggle("client-success-input");
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
