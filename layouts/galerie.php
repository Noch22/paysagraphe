<div class="grid">
  <?php 
  foreach ($content['photos'] as $photo) {
    ?>
    <div class="item">
    <a href="<?=$photo['url'] ?>" target="_blank" data-pswp-width="<?=$photo['width'] ?>" data-pswp-height="<?=$photo['height'] ?>" data-cropped="true">
      <img src="<?=$photo['url'] ?>" alt="<?=$photo['alt']?>" class="btn-img">
    </a>
    </div>
    <?php
  }
  
  
  ?>
</div>