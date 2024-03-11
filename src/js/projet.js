import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

const lightbox = new PhotoSwipeLightbox({
  gallery: '.grid',
  children: 'a',
  showHideAnimationType: 'zoom',
  pswpModule: () => import('photoswipe'),
  initialZoomLevel: "fit"
});
lightbox.init();