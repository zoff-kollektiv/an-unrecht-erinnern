import getVideoId from "get-video-id";

export const init = (video) => {
  video.addEventListener("click", (event) => {
    event.preventDefault();

    const embed = document.createElement("div");
    embed.classList.add("embed");

    const container = document.createElement("div");
    container.classList.add("embed__container");

    const iframe = document.createElement("iframe");
    const { id: videoId } = getVideoId(video.href);

    iframe.setAttribute("src", `https://player.vimeo.com/video/${videoId}`);

    iframe.setAttribute("allow", "autoplay; fullscreen");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");

    container.appendChild(iframe);
    embed.appendChild(container);

    video.classList.add("video--embed-active");
    video.appendChild(embed);
  });
};
