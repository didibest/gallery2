// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");
window.addEventListener("DOMContentLoaded", function() {
  let messg = document.querySelector(".main .messg");
  let me = document.querySelector(".me");
  let dach = document.querySelector(".dach");
  let det = document.querySelector(".details");
  if (messg && me && det && dach) { // Check if elements are found
    me.addEventListener("click", function() {
      det.classList.add("active");
      messg.classList.add("active");
      location.reload();
    });
    dach.addEventListener("click", function() {
      det.classList.remove("active");
      messg.classList.remove("active");
      location.reload();
    });
  } else {
    console.error("Elements not found. Check your selectors.");
  }
});

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


//-----------------form -----------------
