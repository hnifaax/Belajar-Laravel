const loginForm = document.querySelector(".signupForm")
const nama = document.querySelector(".name")
const email = document.querySelector(".email")
const password = document.querySelector(".password")
const btn3 = document.querySelector(".btn3");

btn3.disabled = true;

loginForm.addEventListener("keyup", () => {
    if( nama.value.length > 0 &&
        email.value.length > 0 &&
        password.value.length > 0) {
        btn3.disabled = false;
    } else {
        btn3.disabled = true;
    }
})