console.log("connected");

var but = document.querySelectorAll(".names");
console.log(but);
but.forEach((i) => {
  i.addEventListener("click", function () {
    console.log(i.textContent);
  });
});
console.log("helllo");
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
