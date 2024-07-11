self["webpackHotUpdatewp_theme"]("main",{

/***/ "./src/js/header.js":
/*!**************************!*\
  !*** ./src/js/header.js ***!
  \**************************/
/***/ (() => {

const text = document.querySelector(".text p");
text.innerHTML = text.innerText.split("").map(
  (char, i) => `<span style="transform:rotate(${i * 8.9}deg)">${char}</span>`
).join("");
const circle = document.querySelector(".devis_circle");
circle.addEventListener("mouseover", () => {
  circle.classList.add("hover");
});
circle.addEventListener("mouseleave", () => {
  circle.classList.remove("hover");
});
const header = document.querySelector("header");
const burger = document.querySelector("header .burger");
const menuOpen = document.querySelector("header .open");
const menuClose = document.querySelector("header .close");
const body = document.querySelector("body");
burger.addEventListener(
  "click",
  () => {
    menuOpen.classList.toggle("active");
    if (menuOpen.classList.contains("active")) {
      var tl = gsap.timeline();
      tl.to(".burger", {
        "--beforeScale": 100,
        ease: "power2.inOut",
        duration: 0.5
      });
      tl.to(".open", {
        display: "flex"
      });
      tl.to(
        ".burger",
        {
          "--beforeScale": 1,
          "--beforeOpacity": 0
        }
      );
      burger.classList.toggle("menuOpen");
      header.classList.toggle("headerOpen");
      tl.to(".menu ul li", {
        y: 0,
        opacity: 1,
        stagger: 0.1,
        ease: "power2.inOut"
      });
    } else {
      var tl = gsap.timeline();
      tl.to(".menu ul li", {
        y: "-100%",
        opacity: 0,
        stagger: 0.1,
        ease: "power2.inOut"
      });
      tl.to(".burger", {
        "--beforeScale": 100,
        duration: 0.3,
        ease: "power2.inOut",
        "--beforeOpacity": 0
      });
      tl.to(".open", {
        display: "none",
        delay: 0.5,
        ease: "power2.inOut"
      });
      burger.classList.toggle("menuOpen");
      header.classList.toggle("headerOpen");
      tl.to(
        ".burger",
        {
          "--beforeScale": 1,
          "--beforeOpacity": 1
        }
      );
    }
  }
);


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("c5ba81ebbcb9dbf96270")
/******/ })();
/******/ 
/******/ }
);
//# sourceMappingURL=main.a34952e2942129e6da18.hot-update.js.map