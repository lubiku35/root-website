// Javascript Login Form Validation
const form = document.getElementById('form')

const login_username = document.getElementById('login-username');
const login_password = document.getElementById('login-password');

// Prevent Default behavior
form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
    const login_username_value = login_username.value.trim();
	const login_password_value = login_password.value.trim();
	
	// Check if login username is empty
	if(login_username_value === '') {
		setErrorFor(login_username, 'Username / Email cannot be blank');
	} else {
		setSuccessFor(login_username);
	}
	
	// Check if login password is empty
	if(login_password_value === '') {
		setErrorFor(login_password, 'Password cannot be blank');
	} else {
		setSuccessFor(login_password);
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