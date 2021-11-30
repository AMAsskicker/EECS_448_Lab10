// style_change.js
// EECS 448 lab 8
//
// date: Nov 13, 2021
// author: Adam Abernathy
// KUID: 2876941
//
// changes style of the web page
//


document.addEventListener("DOMContentLoaded", () => {
	//get input values and math operation to use
	let border_color = document.querySelector("#border_input");
	let back_color = document.querySelector("#background");
	let bord_width = document.querySelector("#b_width")
	var back_2_change = document.getElementById('paragraph')


	document.querySelector("#apply_but").addEventListener("click", (e) => {
		//for troubleshooting
		console.log('click');
		console.log('border_color', border_color.value);
		console.log('back_color', back_color.value);
		console.log('b_width', b_width.value)
		var new_back_color, new_border_color, new_width

		switch (border_color.value) {
			case "red":
				new_border_color = "solid red"
				break
			case "green":
				new_border_color = "solid green"
				break
			case "blue":
				new_border_color = "solid blue"
				break
			case "width":
				new_border_color = "solid yellow"
				break;
			default:
				new_border_color = "solid white"
		}
		switch (back_color.value) {
			case "red":
				new_back_color = "red"
				break
			case "green":
				new_back_color = "green"
				break
			case "blue":
				new_back_color = "blue"
				break;
			default:
				new_back_color = "white"
		}
		switch (b_width.value) {
			case "0":
				new_width = "0px "
				break;
			case "1":
				new_width = "1px "
				break
			case "2":
				new_width = "2px "
				break
			case "3":
				new_width = "3px "
				break;
			case "4":
				new_width = "4px "
				break;
			case "5":
				new_width = "5px "
				break;
			case "6":
				new_width = "6px "
				break;
			case "7":
				new_width = "7px "
				break;
			case "8":
				new_width = "8px "
				break;
			case "9":
				new_width = "9px "
				break;
			default:
				new_width = "0px "
		}

    back_2_change.style.background = new_back_color
		back_2_change.style.border = new_width + new_border_color
	});
});
