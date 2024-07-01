<div class="item_titre_et_description_image">
    <div class="item_titre_et_description_image_title">
        <h3 class="primary_text_color"><?= $content['titre'] ?></h3>
        <p class="primry_desc_color"><?= $content['description'] ?></p>
    </div>
    <div class="item_titre_et_description_image_image">
        <img src="<?= $content['image']['sizes']['large'] ?>" alt="<?= $content['image']['alt'] ?>" width="<?= $content['image']['sizes']['large-width'] ?>" height="<?= $content['image']['sizes']['large-height'] ?>">
    </div>
</div>