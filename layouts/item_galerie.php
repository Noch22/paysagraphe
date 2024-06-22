<div class="galerie">
    <?php
            $galerie = $content['galerie'];

            foreach ($galerie as $image) {
                ?>
                <div class="galerie_item">
                    <a href="<?=$image['url']?>" target="_blank" data-pswp-width="<?=$image['width'] ?>" data-pswp-height="<?=$image['height'] ?>" data-cropped="true">
                        <img src="<?= $image['sizes']['medium']?>" alt="<?= $image['alt'] ?>" width="<?= $image['sizes']['medium-width']?>" height="<?= $image['sizes']['medium-height']?>" class="btn-img">
                    </a>
                </div>
                
                <?php
            }
        
    ?>
</div>