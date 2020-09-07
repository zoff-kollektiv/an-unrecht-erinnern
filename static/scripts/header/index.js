import scrollLock from 'scroll-lock';
import Headroom from "headroom.js";

const initOverlay = header => {
  const details = header.querySelector('.header-menu');
  const { disablePageScroll, enablePageScroll } = scrollLock;

  if (details) {
    details.addEventListener('toggle', () => {
      if (details.open === true) {
        disablePageScroll();
      } else {
        enablePageScroll();
      }

      header.classList.toggle('header-menu-container--is-open', details.open === true);
    });
  }
}

export const init = (header) => {
  const headroom = new Headroom(header);

  headroom.init();

  initOverlay(header);
};
