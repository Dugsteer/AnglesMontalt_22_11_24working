document.addEventListener("DOMContentLoaded", function () {
  document.documentElement.scrollTop = 0;
  const top1 = document.getElementById("top1"),
    top2 = document.getElementById("top2");
  // cover = document.getElementById("cover"),
  // cover1 = document.getElementById("cover1"),
  // navcontent = document.getElementById("navcontent"),
  // booky2 = document.querySelector(".navcontent > .booky2text"),
  // contact = !1;

  // function displayTip() {
  //   setTimeout(() => (booky2.style.display = "flex"), 100);
  // }
  // function displayCancel() {
  //   booky2.style.display = "none";
  // }
  function whoIs() {
    top2.classList.remove("left"),
      top2.classList.remove("right"),
      top2.classList.add("middle"),
      top1.classList.add("right");
  }
  function inTouch() {
    top1.classList.remove("left"),
      top1.classList.remove("right"),
      top1.classList.add("middle"),
      top2.classList.add("right");
  }

  // document.querySelectorAll(".fa-eye").forEach((eye) => {
  //   eye.addEventListener("click", () => {
  //     inTouch(), navcontent.scrollIntoView();
  //   });
  // }),
  //   navcontent.firstChild.nextElementSibling.firstChild.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.addEventListener(
  //     "mouseover",
  //     displayTip
  //   ),
  //   navcontent.firstChild.nextElementSibling.firstChild.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.addEventListener(
  //     "mouseout",
  //     displayCancel
  //   );

  // All your existing JavaScript code goes here
});
