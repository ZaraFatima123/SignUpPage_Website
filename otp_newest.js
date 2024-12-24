function sendOTP() {
    const email = document.getElementById('email');
    const otpverify = document.getElementsByClassName('otpverify')[0];

    // Generate a 4-digit OTP
    let otp_val = Math.floor(1000 + Math.random() * 9000); 

    let emailbody = `<h2>Your OTP is </h2>${otp_val}`;
    Email.send({
        SecureToken : "42c966bd-5eb0-45e9-81b7-e80b803c70a6",  // Replace with your valid SMTP.js SecureToken
        To : email.value,
        From : "zfsiddiqui2022@gmail.com",
        Subject : "Email OTP using JavaScript",
        Body : emailbody,
    }).then(
        message => {
            if (message === "OK") {
                alert("OTP sent to your email " + email.value);

                otpverify.style.display = "flex";  // Make OTP input visible
                const otp_inp = document.getElementById('otp_inp');
                const otp_btn = document.getElementById('otp-btn');

                // Attach event listener for the verify button
                otp_btn.addEventListener('click', () => {
                    if (otp_inp.value == otp_val) {
                        alert("Valid OTP! Email address verified..."); 
                        window.location.href = "welcome.html";  // Corrected alert message
                    } else {
                        alert("Invalid OTP");  // Alert for incorrect OTP
                    }
                });
            } else {
                alert("Error sending OTP: " + message);
            }
        }
    );
}
