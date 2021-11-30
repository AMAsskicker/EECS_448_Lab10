// pass_verifi.js
// EECS 448 lab 8
//
// date: Nov 10, 2021
// author: Adam Abernathy
// KUID: 2876941
//
// verifies tow inputs match
//


document.addEventListener("DOMContentLoaded", () => {
	//get input values and math operation to use
	let input1 = document.querySelector("#input1");
	// let input1 = document.getElementById('input1').value;
	let input2 = document.querySelector("#input2");
	// let input2 = document.getElementById('input2').value;

	document.querySelector("#computeButton").addEventListener("click", (e) => {
		//for troubleshooting
		console.log('click');
		console.log('input1', input1.value);
		console.log('input2', input2.value);
		let test1 = input1.value
		let test2 = input2.value

    if ((test1.length < 8) || (test2.length < 8)){
      result  = "PASSWORD MUST BE 8 CHARACTERS LONG"
    } else {
      // if (input1.value == input2.value) {
			if (test1 == test2) {
        result = "PASSWORDS MATCHED";
      } else {
        result = "PASSWORDS UNMATCHED";
      }
    }
    document.querySelector("#result").innerText = result;
	});
});
