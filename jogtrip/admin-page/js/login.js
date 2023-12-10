const Login = document.querySelector(".Login");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
// const btnPopup = document.querySelector(".btnlogin-popup");

registerLink.addEventListener("click", () => {
  Login.classList.add("active");
});

loginLink.addEventListener("click", () => {
  Login.classList.remove("active");
});

// btnPopup.addEventListener("click", () => {
//   Login.classList.add("active-popup");
// });
