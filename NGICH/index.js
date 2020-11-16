const menuToggle = document.querySelectorAll("header .menu");
const menu = document.querySelector("header ul");
menuToggle.forEach((item) => {
  item.addEventListener("click", () => {
    menu.classList.toggle("menu-toggle");
  });
});

// const password = document.getElementById("pass").value;
// const confPassword = document.getElementById("pass").value;
// const fasLock = document.getElementById("lock");

// // for (let i = 0; i < fasLock.length; i++) {
// //   const lock = fasLock[i];
// fasLock.addEventListener("click", function (event) {
//   const lock = event.target;
//   console.log("clicked");
//   if (password == "password") {
//     password = "text";
//   } else {
//     password == "password";
//   }
// });
// // }
