console.log("connected");
var but = document.querySelectorAll(".names");

but.forEach((i) => {
  i.addEventListener("click", function () {
    
    document.querySelector(".model_name").textContent = i.textContent;
    document.querySelector(".model_mail").textContent =
      modal_mail[i.textContent];
    progress(i.textContent);
  });
});
const names = { Ferrari: 65, Chatheriyan: 92, Ferdeno: 40, Abinav: 87 };
const progress = (name) => {
  let bar = document.querySelector(".progress-bar");
  if (names[name] != null) {
    bar.style.width = names[name] + "%";
    bar.textContent = names[name] + "%";
  }
  if (assign_values[name] != null) {
    console.log("he");
    document.querySelector(".as-1").style.width =
      assign_values[name]["as-1"] + "%";
    document.querySelector(".as-1").textContent =
      assign_values[name]["as-1"] + "%";
    document.querySelector(".as-2").style.width =
      assign_values[name]["as-2"] + "%";
    document.querySelector(".as-2").textContent =
      assign_values[name]["as-2"] + "%";
    document.querySelector(".as-3").style.width =
      assign_values[name]["as-3"] + "%";
    document.querySelector(".as-3").textContent =
      assign_values[name]["as-3"] + "%";
    document.querySelector(".as-4").style.width =
      assign_values[name]["as-4"] + "%";
    document.querySelector(".as-4").textContent =
      assign_values[name]["as-4"] + "%";
  }
};
const assign_values = {
  Ferrari: { "as-1": 56, "as-2": 40, "as-3": 89, "as-4": 23 },
  Chatheriyan: { "as-1": 43, "as-2": 87, "as-3": 34, "as-4": 75 },
  Ferdeno: { "as-1": 35, "as-2": 23, "as-3": 97, "as-4": 23 },
  Abinav: { "as-1": 67, "as-2": 83, "as-3": 32, "as-4": 76 },
};
const modal_mail = {
  Ferrari: "ferrar@gmail.com ",
  Chatheriyan: "chathu@gmail.com ",
  Ferdeno: "ferdi@gmail.com ",
  Abinav: "abi@gmail.com ",
};
