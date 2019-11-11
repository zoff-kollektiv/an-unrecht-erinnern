const scrollToItem = item => {
  item.scrollIntoView({ behavior: "smooth" });
};

export const init = gallery => {
  const items = gallery.childNodes;

  items.forEach(item =>
    item.addEventListener("click", event => {
      event.preventDefault();

      scrollToItem(event.currentTarget);
    })
  );
};
