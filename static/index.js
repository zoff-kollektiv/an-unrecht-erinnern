import './styles/style.scss';

import domready from 'domready';

import { init as initGallery } from './scripts/gallery';

domready(() => {
  const galleries = Array.from(document.querySelectorAll('.wp-block-gallery'));

  galleries.forEach(initGallery);
});
