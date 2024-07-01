<div class="galerie">
    <?php
            $galerie = $content['galerie'];

            foreach ($galerie as $image) {
                ?>
                <div class="galerie_item">
                    <a href="<?=$image['url']?>" target="_blank" data-pswp-width="<?=$image['width'] ?>" data-pswp-height="<?=$image['height'] ?>" data-cropped="true">
                        <img src="<?= $image['sizes']['large']?>" alt="<?= $image['alt'] ?>" width="<?= $image['sizes']['large-width']?>" height="<?= $image['sizes']['large-height']?>" class="btn-img">
                    </a>
                </div>
                
                <?php
            }
        
    ?>
</div>