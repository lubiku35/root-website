// Javascript Contact Form Validation

const form = document.getElementById('form')

const contact_name = document.getElementById('contact-name');
const contact_email = document.getElementById('contact-email');
const contact_subject = document.getElementById('contact-subject');

// Prevent Default behavior
form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
    const contact_name_value = contact_name.value.trim();
	const contact_email_value = contact_email.value.trim();
	const contact_subject_value = contact_subject.value.trim();
	
	// Check if contact name is empty
	if(contact_name_value === '') {
		setErrorFor(contact_name, 'Username cannot be blank');
	} else {
		setSuccessFor(contact_name);
	}

	// Check if contact email is empty. and if it is valid email
	if(contact_email_value === '') {
		setErrorFor(contact_email, 'Email cannot be blank');
	} else if (!isEmail(contact_email_value)) {
		setErrorFor(contact_email, 'Not a valid email');
	} else {
		setSuccessFor(contact_email);
	}

	// Check if contact subject is empty
	if(contact_subject_value === '') {
		setErrorFor(contact_subject, 'Subject cannot be blank');
	} else {
		setSuccessFor(contact_subject);
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

