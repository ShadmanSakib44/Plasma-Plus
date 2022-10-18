const sign_in_btn = document.querySelector("#sign-in-btn");

const sign_up_btn = document.querySelector("#sign-up-btn");

const adminbtn = document.querySelector("#admin-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// adminbtn.addEventListener("click", () => {
//   container.classList.remove("admin-btn");
// });
