//formChecker.js
// checks that for is filled in, user is an email, password is not blank



function validateForm() {
  let form_pass = document.forms["order_form"]["password"].value;
  let form_email = document.forms["order_form"]["user"].value;
  let item_1 = document.forms["order_form"]["item1"].value;
  let item_2 = document.forms["order_form"]["item2"].value;
  let item_3 = document.forms["order_form"]["item3"].value;
  let item_4 = document.forms["order_form"]["item4"].value;
  let item_5 = document.forms["order_form"]["item5"].value;
  let ship_rad = document.getElementsByName("shipping");
  //check password
  if (form_pass == "") {
    alert("PASSWORD must be filled out");
    return false;
  }
  // check email
  if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form_email)))
    {
      alert("You have entered an invalid email address!");
      return (false);
  }
  // check items is num, not empty and in range
  if (isNaN(item_1) || item_1 == "") {
    alert("Must enter a valid quantity for red spatula");
    return false;
  } else if (item_1 < 0 || item_1 > 9) {
    alert("Must enter a valid quantity for red spatula");
    return false;
  }
  if (isNaN(item_2) || item_2 == "") {
    alert("Must enter a quantity for blue spatula");
    return false;
  } else if (item_2 < 0 || item_2 > 9) {
    alert("Must enter a valid quantity for blue spatula");
    return false;
  }
  if (isNaN(item_3) || item_3 == "") {
    alert("Must enter a quantity for purple spatula");
    return false;
  } else if (item_3 < 0 || item_3 > 9) {
    alert("Must enter a valid quantity for purple spatula");
    return false;
  }
  if (isNaN(item_4) || item_4 == "") {
    alert("Must enter a quantity for white spatula");
    return false;
  } else if (item_4 < 0 || item_4 > 9) {
    alert("Must enter a valid quantity for white spatula");
    return false;
  }
  if (isNaN(item_5) || item_5 == "") {
    alert("Must enter a quantity for black spatula");
    return false;
  } else if (item_5 < 0 || item_5 > 9) {
    alert("Must enter a valid quantity for white spatula");
    return false;
  }
  // check shipping is chosen
  if (!(ship_rad[0].checked || ship_rad[1].checked || ship_rad[2].checked)) {
      alert("Please select the shipping ");
      return false;
  }
}
