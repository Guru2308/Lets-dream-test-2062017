const cred = {
  "qwerty_mentee@gmail.com": "qwerty",
  "qwerty_mentor@gmail.com": "qwerty",
};
const mail_id = document.querySelector("#email-ef64");
const pass = document.querySelector("#password-ef64");
const mail_list = {
  "qwerty_mentee@gmail.com": 2,
  "qwerty_mentor@gmail.com": 1,
};

function redirect() {

  console.log("hello1");
  if (mail_list[mail_id.value] == 1) {
    if (cred[mail_id] == cred[pass]) {
      window.location.href =
        "../Lets-dream-Mentor-dashboard/index.html";
    }
  } else if(mail_list[mail_id.value]==2) {
    if (cred[mail_id] == cred[pass]) {
      window.location.href =
        "../Lets-dream-Mentee-dashboard/index.html";

  
  if (mail_list[mail_id] == 1) {
    if (cred[mail_id] == cred[pass]) {
      window.location.href = "../Lets-dream-Mentor-dashboard/index.html";
      console.log("hello1");
    } 
    
  } else {
    if (cred[mail_id] == cred[pass]) {
      window.location.href = "../Lets-dream-Mentee-dashboard/index.html";

    }
  }
}
  }
}
