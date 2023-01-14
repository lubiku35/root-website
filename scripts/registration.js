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

    checkUserInputs();

    if (!valid_reg_name || !valid_reg_username || !valid_reg_email || !valid_reg_password || !valid_reg_password_repeat || !valid_reg_conditions) {
        e.preventDefault()
    }

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


    const reg_name_error_msg_box = document.getElementById("client-error-name");
    const reg_username_error_msg_box = document.getElementById("client-error-username");
    const reg_email_error_msg_box = document.getElementById("client-error-email");
    const reg_password_error_msg_box = document.getElementById("client-error-password");
    const reg_password_repeat_error_msg_box = document.getElementById("client-error-password-repeat");
    const reg_conditions_error_msg_box = document.getElementById("client-error-conditions");

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

    if (!valid_reg_name || !valid_reg_username || !valid_reg_email || !valid_reg_password || !valid_reg_password_repeat || !valid_reg_conditions) {
        
        if (valid_reg_name_message != false) {
            reg_name_error_msg_box.innerText = valid_reg_name_message;
            
            if (reg_name.classList.contains('client-success-input')) {
                reg_name.classList.remove('client-success-input');
                reg_name.classList.add('client-error-input');
            } else if (reg_name.classList.contains('client-error-input')) {
                reg_name.classList.remove('client-error-input');
                reg_name.classList.add('client-error-input');
            } else {
                reg_name.classList.add('client-error-input');
            }
        } else {
            reg_name_error_msg_box.innerText = "";
            
            if (reg_name.classList.contains('client-success-input')) {
                reg_name.classList.remove('client-success-input');
                reg_name.classList.add('client-success-input');
            } else if (reg_name.classList.contains('client-error-input')) {
                reg_name.classList.remove('client-error-input');
                reg_name.classList.add('client-success-input');
            } else {
                reg_name.classList.add('client-success-input');
            }
        }
        
        if (valid_reg_username_message != false) {
            reg_username_error_msg_box.innerText = valid_reg_username_message;
            
            if (reg_username.classList.contains('client-success-input')) {
                reg_username.classList.remove('client-success-input');
                reg_username.classList.add('client-error-input');
            } else if (reg_username.classList.contains('client-error-input')) {
                reg_username.classList.remove('client-error-input');
                reg_username.classList.add('client-error-input');
            } else {
                reg_username.classList.add('client-error-input');
            }
        } else {
            reg_username_error_msg_box.innerText = "";

            if (reg_username.classList.contains('client-success-input')) {
                reg_username.classList.remove('client-success-input');
                reg_username.classList.add('client-success-input');
            } else if (reg_username.classList.contains('client-error-input')) {
                reg_username.classList.remove('client-error-input');
                reg_username.classList.add('client-success-input');
            } else {
                reg_username.classList.add('client-success-input');
            }
        }
        
        if (valid_reg_email_message != false) {
            reg_email_error_msg_box.innerText = valid_reg_email_message;
            
            if (reg_email.classList.contains('client-success-input')) {
                reg_email.classList.remove('client-success-input');
                reg_email.classList.add('client-error-input');
            } else if (reg_email.classList.contains('client-error-input')) {
                reg_email.classList.remove('client-error-input');
                reg_email.classList.add('client-error-input');
            } else {
                reg_email.classList.add('client-error-input');
            }

        } else {
            reg_email_error_msg_box.innerText = "";

            if (reg_email.classList.contains('client-success-input')) {
                reg_email.classList.remove('client-success-input');
                reg_email.classList.add('client-success-input');
            } else if (reg_email.classList.contains('client-error-input')) {
                reg_email.classList.remove('client-error-input');
                reg_email.classList.add('client-success-input');
            } else {
                reg_email.classList.add('client-success-input');
            }
        }
        
        if (valid_reg_password_message != false) {
            reg_password_error_msg_box.innerText = valid_reg_password_message;
            
            if (reg_password.classList.contains('client-success-input')) {
                reg_password.classList.remove('client-success-input');
                reg_password.classList.add('client-error-input');
            } else if (reg_password.classList.contains('client-error-input')) {
                reg_password.classList.remove('client-error-input');
                reg_password.classList.add('client-error-input');
            } else {
                reg_password.classList.add('client-error-input');
            }
        } else {
            reg_password_error_msg_box.innerText = "";

            if (reg_password.classList.contains('client-success-input')) {
                reg_password.classList.remove('client-success-input');
                reg_password.classList.add('client-success-input');
            } else if (reg_password.classList.contains('client-error-input')) {
                reg_password.classList.remove('client-error-input');
                reg_password.classList.add('client-success-input');
            } else {
                reg_password.classList.add('client-success-input');
            }
        }
        
        if (valid_reg_password_repeat_message != false) {
            reg_password_repeat_error_msg_box.innerText = valid_reg_password_repeat_message;
            
            if (reg_password_repeat.classList.contains('client-success-input')) {
                reg_password_repeat.classList.remove('client-success-input');
                reg_password_repeat.classList.add('client-error-input');
            } else if (reg_password_repeat.classList.contains('client-error-input')) {
                reg_password_repeat.classList.remove('client-error-input');
                reg_password_repeat.classList.add('client-error-input');
            } else {
                reg_password_repeat.classList.add('client-error-input');
            }
        } else {
            reg_password_repeat_error_msg_box.innerText = "";

            if (reg_password_repeat.classList.contains('client-success-input')) {
                reg_password_repeat.classList.remove('client-success-input');
                reg_password_repeat.classList.add('client-success-input');
            } else if (reg_password_repeat.classList.contains('client-error-input')) {
                reg_password_repeat.classList.remove('client-error-input');
                reg_password_repeat.classList.add('client-success-input');
            } else {
                reg_password_repeat.classList.add('client-success-input');
            }
        }
        
        if (valid_reg_conditions_message != false) {
            reg_conditions_error_msg_box.innerText = valid_reg_conditions_message;
            
            if (reg_conditions.classList.contains('client-success-input')) {
                reg_conditions.classList.remove('client-success-input');
                reg_conditions.classList.add('client-error-input');
            } else if (reg_conditions.classList.contains('client-error-input')) {
                reg_conditions.classList.remove('client-error-input');
                reg_conditions.classList.add('client-error-input');
            } else {
                reg_conditions.classList.add('client-error-input');
            }
        } else {
            reg_conditions_error_msg_box.innerText = "";

            if (reg_conditions.classList.contains('client-success-input')) {
                reg_conditions.classList.remove('client-success-input');
                reg_conditions.classList.add('client-success-input');
            } else if (reg_conditions.classList.contains('client-error-input')) {
                reg_conditions.classList.remove('client-error-input');
                reg_conditions.classList.add('client-success-input');
            } else {
                reg_conditions.classList.add('client-success-input');
            }
        }
    }
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

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
