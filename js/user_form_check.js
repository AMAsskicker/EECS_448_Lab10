//formChecker.js
// checks that for is filled in, user is an email, password is not blank



function validateForm() {
  let newUser = document.forms["new_user"]["userName"].value;
  //check password
  if (newUser == "") {
    alert("USER NAME must be filled out");
    return false;
  }

}
