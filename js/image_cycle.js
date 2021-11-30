// image_cycle.js
// EECS 448 lab 8
//
// date: Nov 11, 2021
// author: Adam Abernathy
// KUID: 2876941
//
// cycles through images in folder https://people.eecs.ku.edu/~a682a575/image/
// image_x.jpeg file name convention
//


document.addEventListener("DOMContentLoaded", () => {
	//get input values needed


	document.querySelector("#reverse").addEventListener("click", (e) => {
    let current = document.getElementById('image_blk').src;
		//for troubleshooting
		console.log('click');
    console.log('image src', current)
    switch (current) {
      case "https://people.eecs.ku.edu/~a682a575/image/image_1.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_6.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_2.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_1.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_3.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_2.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_4.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_3.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_5.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_4.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_6.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_5.jpeg"
        break;
      default:
        new_img = "https://people.eecs.ku.edu/~a682a575/image_1.jpeg"
    }
    document.getElementById("image_blk").src = new_img;
	});

  document.querySelector("#forward").addEventListener("click", (e) => {
    let current = document.getElementById('image_blk').src;
		//for troubleshooting
		console.log('click');
    console.log('image src', current)
    switch (current) {
      case "https://people.eecs.ku.edu/~a682a575/image/image_1.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_2.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_2.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_3.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_3.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_4.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_4.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_5.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_5.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_6.jpeg"
        break;
      case "https://people.eecs.ku.edu/~a682a575/image/image_6.jpeg":
        console.log("match")
        new_img = "https://people.eecs.ku.edu/~a682a575/image/image_1.jpeg"
        break;
      default:
        new_img = "https://people.eecs.ku.edu/~a682a575/image_1.jpeg"
    }
    document.getElementById("image_blk").src = new_img;
	});
});
