import Headroom from "headroom.js";

export const init = (header) => {
  const headroom = new Headroom(header);

  headroom.init();
};
