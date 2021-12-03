//formChecker.js
// checks that form is filled in



function validateForm() {
  let newUser = document.forms["new_post"]["post_message"].value;
  //check password
  if (newUser == "") {
    alert("MESSAGE must be filled out");
    return false;
  }

}
