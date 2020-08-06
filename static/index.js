import "./styles/style.scss";

import domready from "domready";

import { init as initVideo } from "./scripts/video";

domready(() => {
  const videos = Array.from(document.querySelectorAll(".video"));

  videos.forEach(initVideo);
});
