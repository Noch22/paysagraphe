import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

const lightbox = new PhotoSwipeLightbox({
  gallery: '.galerie',
  children: 'a',
  showHideAnimationType: 'zoom',
  pswpModule: () => import('photoswipe'),
  initialZoomLevel: "fit"
});
lightbox.init();