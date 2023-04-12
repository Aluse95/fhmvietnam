const serviceMobileItems = document.querySelectorAll(
  "#service .service-mobile .service-item"
);

serviceMobileItems.forEach((serviceMobileItem) => {
  serviceMobileItem.addEventListener("click", () => {
    if (
      document.querySelector(
        "#service .service-mobile .service-item.active"
      ) === null
    ) {
      serviceMobileItem.classList.add("active");
    } else {
      if (serviceMobileItem.classList.contains("active")) {
        serviceMobileItem.classList.remove("active");
      } else {
        document
          .querySelector("#service .service-mobile .service-item.active")
          .classList.remove("active");
        serviceMobileItem.classList.add("active");
      }
    }
  });
});
