"use strict";

const modal = document.querySelector(".modal");
const modaladmin = document.querySelector(".modal-admin");
const modal1 = document.querySelector(".modal1");
const overlay = document.querySelector(".overlay");
const modaldwld = document.querySelector(".modal-dwld");

// const btnCloseModal = document.querySelector(".close-modal");
const btnsOpenModal = document.querySelectorAll(".show-modal");
const btnsOpenModaldwld = document.querySelectorAll(".download-button");
const btnsOpenModalregi = document.querySelectorAll(".show-modal-regi");
const btnsOpenModaladmin = document.querySelectorAll(".show-modal-admin");

const openModal = function () {
  modal.classList.remove("hidden");
  modal.classList.remove("modal");
  overlay.classList.remove("hidden");
  console.log("open");
};

const openModaladmin = function () {
  modaladmin.classList.remove("hidden");
  modaladmin.classList.remove("modal");
  overlay.classList.remove("hidden");
  console.log("open");
};

const openModalregi = function () {
  modal1.classList.remove("hidden");
  modal1.classList.remove("modal1");
  overlay.classList.remove("hidden");
  console.log("open");
};

const openModaldwld = function () {
  modaldwld.classList.remove("hidden");
  modaldwld.classList.remove("modal-dwld");
  overlay.classList.remove("hidden");
  console.log("open");
};

const closeModal = function () {
  modal1.classList.add("hidden");
  modal.classList.add("hidden");
  modaladmin.classList.add("hidden");
  modaldwld.classList.add("hidden");
  //   openModalrdwld
  overlay.classList.add("hidden");
  console.log("close");
};

btnsOpenModal[0].addEventListener("click", openModal);
btnsOpenModalregi[0].addEventListener("click", openModalregi);
btnsOpenModaldwld[0].addEventListener("click", openModaldwld);
btnsOpenModaldwld[1].addEventListener("click", openModaldwld);
btnsOpenModaladmin[0].addEventListener("click", openModaladmin);

// btnCloseModal.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  // console.log(e.key);

  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});
