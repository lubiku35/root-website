// Javascript Register Form Validation
const form = document.getElementById('form')
const small = document.getElementById('form-client-error-message');

const register_name = document.getElementById('register-name');
const register_username = document.getElementById('register-username');
const register_email = document.getElementById('register-email');
const register_password = document.getElementById('register-password');
const register_password_repeat = document.getElementById('register-password-repeat');

let register_name_valid = false;
let register_username_valid = false;
let register_email_valid = false;
let register_password_valid = false;
let register_password_repeat_valid = false;

// Prevent Default behavior
form.addEventListener('submit', e => {	
	checkInputs();
	
	if (!register_email_valid || !register_email_valid || !register_email_valid || !register_password_valid || !register_password_repeat_valid) {
		e.preventDefault();
	}
});

function checkInputs() {
	// trim to remove the whitespaces
	const register_name_value = register_name.value.trim();
	const register_username_value = register_username.value.trim();
	const register_email_value = register_email.value.trim();
	const register_password_value = register_password.value.trim();
	const register_password_repeat_value = register_password_repeat.value.trim();

	// Check if register name is empty
	if(register_name_value === '') {
		setErrorFor(register_name, 'Username cannot be blank');
	} else {
		setSuccessFor(register_name);
		register_name_valid = true;
	}

	// Check if register username is empty
	if(register_username_value === '') {
		setErrorFor(register_username, 'Username cannot be blank');
	} else {
		setSuccessFor(register_username);
		register_username_valid = true;

	}
	
	// Check if register email is empty. and if it is valid email
	if(register_email_value === '') {
		setErrorFor(register_email, 'Email cannot be blank');
	} else if (!isEmail(register_email_value)) {
		setErrorFor(register_email, 'Not a valid email');
	} else {
		setSuccessFor(register_email);
		register_email_valid = true;
	}
	
	// Check if register password is empty. and if passwords match
	if(register_password_value === '') {
		setErrorFor(register_password, 'Password cannot be blank');
	} else {
		setSuccessFor(register_password);
		register_password_valid = true;
	}
	
	if(register_password_repeat_value === '') {
		setErrorFor(register_password_repeat, 'Repeat password cannot be blank');
	} else if(register_password_value !== register_password_repeat_value) {
		setErrorFor(register_password_repeat, 'Passwords does not match');
	} else{
		setSuccessFor(register_password_repeat);
		register_password_repeat_valid = true;
	}
}

// Set Error class for tag small inside form, and also for invalid inputs fields
function setErrorFor(input, message) {
	const label_control = input.parentElement;
	const small = label_control.querySelector('small');
	input.classList.toggle("client-form-control-error");
	small.innerText = message;
}

// Set Success class for tag small inside form, and also for invalid inputs fields
function setSuccessFor(input) {
	input.classList.toggle("client-form-control-success");
}

// Email Regex
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}