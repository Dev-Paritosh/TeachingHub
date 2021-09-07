const darkbtn = document.getElementById("dark");

const navbar = document.getElementById("navbar");
const box = document.getElementsByClassName("box");
const admin_box = document.getElementsByClassName("boxa");
const boxlg = document.getElementsByClassName("box-lg")[0];
// const box = document.getElementsByClassName("box");
const button = document.getElementsByClassName("btn-p");
const button_d = document.getElementsByClassName("btn-d")[0];
const makedark = document.getElementsByClassName("make-dark");
const icon = document.getElementsByClassName("social-icon");
const inputfield = document.getElementsByTagName("input");
const togglebar = document.getElementsByClassName("navbar-toggler")[0];

const body = document.body;

darkbtn.addEventListener("click", function () {
  navbar.classList.toggle("navbar-light");
  navbar.classList.toggle("bg-light");
  navbar.classList.toggle("navbar-custom");
  togglebar.classList.toggle("toggle-bar");
  //   navbar.classList.toggle("bg-dark");
  navbar.classList.toggle("box-dark");
  body.classList.toggle("body-dark");
  for (let i = 0; i < box.length; i++) {
    box[i].classList.toggle("box-dark");
    box[i].classList.toggle("dark-box-shadow");
  }

  for (let i = 0; i < admin_box.length; i++) {
    admin_box[i].classList.toggle("box-dark");
    // box[i].classList.toggle("dark-box-shadow");
  }

  boxlg.classList.toggle("box-dark");
  boxlg.classList.toggle("dark-box-shadow");
  for (let i = 0; i < button.length; i++) {
    button[i].classList.toggle("btn-primary");
    button[i].classList.toggle("btn-dark");
    button[i].classList.toggle("btn-text-color");
  }
  button_d.classList.toggle("btn-text-color");
  for (let i = 0; i < makedark.length; i++) {
    makedark[i].classList.toggle("navbar-custom");
  }
  for (let i = 0; i < icon.length; i++) {
    icon[i].classList.toggle("dark-icon");
  }

  for (let i = 0; i < inputfield.length; i++) {
    inputfield[i].classList.toggle("dark-input");
  }
  console.log("clicked");
});
