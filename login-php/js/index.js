const containerAll = document.querySelector(".container-all");
const containerFroms = document.querySelector(".container-forms");
const formLogin = document.querySelector(".form-login");
const formRegister = document.querySelector(".form-register");
const boxLogin = document.querySelector(".box-login");
const boxRegister = document.querySelector(".box-register");

const widthPage = () => {
  if (window.innerWidth > 850) {
    boxRegister.style.display = "block";
    boxLogin.style.display = "block";
  } else {
    boxRegister.style.display = "block";
    boxRegister.style.opacity = "1";
    boxLogin.style.display = "none";
    formLogin.style.display = "block";
    containerFroms.style.left = "0px";
    formRegister.style.display = "none";
  }
};
widthPage();

const login = () => {
  if (window.innerWidth > 850) {
    formLogin.style.display = "block";
    containerFroms.style.left = "10px";
    formRegister.style.display = "none";
    boxRegister.style.opacity = "1";
    boxLogin.style.opacity = "0";
  } else {
    formRegister.style.display = "none";
    containerFroms.style.left = "0px";
    formLogin.style.display = "block";
    boxRegister.style.display = "block";
    boxLogin.style.display = "none";
  }
};

const register = () => {
  if (window.innerWidth > 850) {
    formRegister.style.display = "block";
    containerFroms.style.left = "410px";
    formLogin.style.display = "none";
    boxRegister.style.opacity = "0";
    boxLogin.style.opacity = "1";
  } else {
    formRegister.style.display = "block";
    containerFroms.style.left = "0px";
    formLogin.style.display = "none";
    boxRegister.style.display = "none";
    boxLogin.style.display = "block";
    boxLogin.style.opacity = "1";
  }
};

document.getElementById("btn-register-box").addEventListener("click", register);
document.getElementById("btn-login-box").addEventListener("click", login);
window.addEventListener("resize", widthPage);
