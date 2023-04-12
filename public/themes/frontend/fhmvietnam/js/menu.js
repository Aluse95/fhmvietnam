let toggle = false;
const mobileMenu = document.querySelector("#header .menu-mobile");
const toggleButton = document.querySelector(
  "#header .header-container .toggle-button"
);

const toggleMobileMenu = () => {
  if (toggle) {
    mobileMenu.style.transform = "translateX(0%)";
    toggleButton.classList.add("close");
    toggle = false;
  } else {
    mobileMenu.style.transform = "translateX(100%)";
    toggleButton.classList.remove("close");
    toggle = true;
  }
};
