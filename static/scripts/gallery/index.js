import Swiper from "swiper";

const scrollToItem = (item) => {
  item.scrollIntoView({ behavior: "smooth" });
};

export const init = (gallery) => {
  return;
  swiper = new Swiper(".wp-block-gallery", {
    wrapperClass: "blocks-gallery-grid",
    slideClass: "blocks-gallery-item",

    freeMode: true,
  });
};
