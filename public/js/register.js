function redirectToLanding() {
    window.location.href = '/'; // Redirect to the landing page
}

document.addEventListener('DOMContentLoaded', function() {
  const signUpForm = document.getElementById('signup'); // The signup form
  const popUp = document.getElementById('successMessage'); // Success pop-up
  const closeButton = document.getElementById('closePopup'); // Close button inside pop-up
  const okayButton = document.getElementById('okay'); // okay button inside pop-up
  const btnsignup = this.getElementById('signupbtn')

  // Listen for form submit
  signUpForm.addEventListener('submit', function(e) {
    // Prevent the form from submitting immediately
    e.preventDefault();

    // If the form is valid, show the pop-up
    if (signUpForm.checkValidity()) {
      popUp.style.display = 'block'; // Show the pop-up
    }
  });

  // Close the pop-up when the close button is clicked, and submit the form
  closeButton.addEventListener('click', function() {
    popUp.style.display = 'none'; // Hide the pop-up

    // Manually submit the form after closing the pop-up
    signUpForm.submit();
  });

  okay.addEventListener('click', function() {
    signUpForm.submit();
  });
});
