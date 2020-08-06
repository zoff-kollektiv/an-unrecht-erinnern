import "./styles/style.scss";

import domready from "domready";

import { init as initHeader } from "./scripts/header";
import { init as initVideo } from "./scripts/video";

domready(() => {
  const header = document.querySelector(".js-menu");
  const videos = Array.from(document.querySelectorAll(".video"));

  videos.forEach(initVideo);
  initHeader(header);
});
