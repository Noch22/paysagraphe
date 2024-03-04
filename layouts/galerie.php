<div class="grid">
  <?php 
  foreach ($content['photos'] as $photo) {
    ?>
    <div class="item">
      <img src="<?=$photo['sizes']['cover_thumbnail'] ?>" alt="<?=$photo['alt']?>">
    </div>
    <?php
  }
  
  
  ?>
</div>