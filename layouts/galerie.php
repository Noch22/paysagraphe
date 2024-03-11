<div class="grid">
  <?php 
  foreach ($content['photos'] as $photo) {
    ?>
    <div class="item">
      <img src="<?=$photo['url'] ?>" alt="<?=$photo['alt']?>" class="btn-img">
      
    </div>
    <?php
  }
  
  
  ?>
</div>