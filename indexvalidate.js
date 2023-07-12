<script>
function validateForm() {
  // Get the values from the form
  var patientId = document.getElementById("Patient_ID").value.trim();
  var firstName = document.getElementById("fname").value.trim();
  var lastName = document.getElementById("lname").value.trim();
  var phoneNumber = document.getElementById("PhoneNumber").value.trim();
  var address = document.getElementById("Address").value.trim();
  var email = document.getElementById("email").value.trim();
  var subject = document.getElementById("subject").value.trim();

  // Check if all fields are filled
  if (
    patientId === "" ||
    firstName === "" ||
    lastName === "" ||
    phoneNumber === "" ||
    address === "" ||
    email === "" ||
    subject === ""
  ) {
    alert("All fields are required");
    return false;
  }

  // Check if firstName and lastName are less than 20 characters
  if (firstName.length > 20 || lastName.length > 20) {
    alert("First name and last name should not exceed 20 characters");
    return false;
  }

  // Check if address is less than 50 characters
  if (address.length > 50) {
    alert("Address should not exceed 50 characters");
    return false;
  }

  // Check if subject is less than 50 characters
  if (subject.length > 50) {
    alert("Subject should not exceed 50 characters");
    return false;
  }

  // Validate phone number
  var phoneRegex = /^[0-9]{10}$/;
  if (!phoneRegex.test(phoneNumber)) {
    alert("Phone number is invalid");
    return false;
  }

  // Validate email
  var emailRegex = /^\S+@\S+\.\S+$/;
  if (!emailRegex.test(email)) {
    alert("Email is invalid");
    return false;
  }

  // If all fields are valid, return true to submit the form
  return true;
}
</script>
