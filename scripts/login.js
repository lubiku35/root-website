// elements variables
const log_form = document.getElementById("log-form");

const log_username = document.getElementById("log-username");
const log_password = document.getElementById("log-password");
const client_error_login = document.getElementById("client-error-login");

// validation variables
let valid_log_username = false;
let valid_log_password = false;

// login error message
let login_error_message = "Username or password not valid";

log_form.addEventListener('submit', e => {
    checkUserInputs();

    if (!valid_log_username || !valid_log_password) {
        client_error_login.innerText = login_error_message;
        e.preventDefault()
    } else {
        client_error_login.innerText = "";
    }

})

function checkUserInputs() {
    // value => get value from input
    // trim => remove whitespaces
    const log_username_value = log_username.value.trim(); 
    const log_password_value = log_password.value.trim();

    valid_log_username = checkUsername(log_username_value);
    valid_log_password = chceckPassword(log_password_value);
}

function checkUsername(username) {
    whitespace = /\s/;
    if (username === '') {
        return false;     
    }  else if (whitespace.test(username)){
        return false;  
    } else {
        return true;
    }
}

function chceckPassword(password) {
    
    if (password === '') { 
        return false; 
    }  else {
        return true;
    }
}