if (document.getElementById("heroSLider")) {
  const heroSLider = new Glide("#heroSLider", {
    type: "carousel",
    autoplay: 4000,
    animationDuration: 800,
  });

  const areasSLider = new Glide("#areasSLider", {
    type: "carousel",
    // autoplay: 4000,
    animationDuration: 800,
    perView: 3,
    gap: 20,
    breakpoints: {
      900: {
        perView: 2,
      },
      600: {
        perView: 1,
      },
    },
  });

  heroSLider.mount();
  areasSLider.mount();
}

const menu = document.getElementById("mobileMenu");
const burger = document.getElementById("hamburger");
burger.addEventListener("click", function () {
  this.classList.toggle("is-active");
  menu.classList.toggle("active");
});

const moreBtn = document.querySelectorAll("#first #more")[0];
if (moreBtn) {
  const priceBoxes = document.querySelectorAll("#first #tables .table-holder");
  const priceArrow = moreBtn.getElementsByTagName("img")[0];
  moreBtn.addEventListener("click", function () {
    priceBoxes.forEach((item, index) => {
      if (index !== 0) {
        item.classList.toggle("table-holder--show");
      }
    });
    priceArrow.classList.toggle("rotate");
    document
      .getElementsByClassName("tables-title")[0]
      .scrollIntoView({ behavior: "smooth" });
  });

  const moreBtn2 = document.querySelectorAll("#second #more")[0];
  const priceBoxes2 = document.querySelectorAll(
    "#second #tables .table-holder"
  );
  const priceArrow2 = moreBtn2.getElementsByTagName("img")[0];
  moreBtn2.addEventListener("click", function () {
    priceBoxes2.forEach((item, index) => {
      if (index !== 0) {
        item.classList.toggle("table-holder--show");
      }
    });
    priceArrow2.classList.toggle("rotate");
    document
      .getElementsByClassName("tables-title")[1]
      .scrollIntoView({ behavior: "smooth" });
  });
}
