function validateForm() {

    var errorMessage = document.getElementById("errorMessage");
    errorMessage.innerHTML = ""; 
  

    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var terms = document.getElementById("terms").checked;
    var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

    var errors = [];
    var valid = true;

    if (password === "") {
        errors.push("Password is required.");
        valid = false;
    } else if (password !== confirmPassword) {
        errors.push("Passwords do not match.");
        valid = false;
    }

    if (!paymentMethod) {
        errors.push("Please select a payment method.");
        valid = false;
    }

    if (!terms) {
        errors.push("You must agree to the terms and conditions.");
        valid = false;
    }

    if (errors.length > 0) {
        errorMessage.innerHTML = errors.join("<br>");
    } else {
        errorMessage.innerHTML = "Form submitted successfully!";
    }

    return valid;
}
