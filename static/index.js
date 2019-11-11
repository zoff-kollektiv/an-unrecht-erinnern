import './styles/style.scss';

import domready from 'domready';

import { init as initGallery } from './scripts/gallery';
import { init as initVideo } from './scripts/video';

domready(() => {
  const galleries = Array.from(document.querySelectorAll('.wp-block-gallery'));
  const videos = Array.from(document.querySelectorAll('.video'));

  galleries.forEach(initGallery);
  videos.forEach(initVideo);
});
