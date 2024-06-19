const sign_in_btn = document.querySelector("#signin-btn");
const sign_up_btn = document.querySelector("#signup-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("signup-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("signup-mode");
});