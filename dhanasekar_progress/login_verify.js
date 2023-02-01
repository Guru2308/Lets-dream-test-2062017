const cred = {
  "qwerty_mentee@gmail.com": "qwerty",
  "qwerty_mentor@gmail.com": "qwerty",
};
const mail_id = document.getElementById("email-ef64").value;
const pass = document.getElementById("password-ef64").value;
const mail_list = {
  "qwerty_mentee@gmail.com": 2,
  "qwerty_mentor@gmail.com": 1,
};
const sub = document.getElementsById("sub");
function redirect() {
  console.log("hello1");
  if (mail_list == 1) {
    if (cred[mail_id] == cred[pass]) {
      window.location.href =
        "C:/xampp/htdocs/lets_dream/Lets-dream-test-2062017/Lets-dream-Mentor-dashboard/index.html";
    }
  } else {
    if (cred[mail_id] == cred[pass]) {
      window.location.href =
        "C:/xampp/htdocs/lets_dream/Lets-dream-test-2062017/Lets-dream-Mentee-dashboard/index.html";
    }
  }
}
