function handleSubmit() {
    // Get values from form
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("studentEmail").value.trim();
    var phoneNumber = document.getElementById("phoneNumber").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirmPassword = document.getElementById("confirmPassword").value.trim();

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    // Clear previous messages
    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    // Validation
    if (name === "" || email === "" || phoneNumber === "" || password === "" || confirmPassword ==="") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    }

    if (!email.includes("@")) {
        alert(" Email must contain @.");
        return;
    }

    if (isNaN(phoneNumber) || phoneNumber === "") {
        alert("Phone number must contain only digits");
        return ;
    }

    if(password !== confirmPassword){
        alert("Password don't match");
        return ;
    }


    outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
        Phone: ${phoneNumber}<br>
      `;

    return false;
}