<?php /* Template Name: Page bento */
wp_head();

?>
 <div class="cursor-follower">
        <div class="cursor-follower-inner"></div>
    </div>
<main style="padding: 0;">
    <div class="profile_picture">
        <img src="<?= get_template_directory_uri() . "/src/assets/LOGO.png"?>" alt="image Noah Buisson">
    </div>
    <div class="profile_name">
        <h1>Noah Buisson</h1>
    </div>
    <div class="cards">
                    <?php 
                        $socials = get_field("reseau_social", "options");
                        foreach($socials as $social):
                        $html_string = $social['icone'];
                        $class = "fa-instagram";
                        $is_instagram = preg_match('<i class="[^"]*'.$class.'[^"]*">', $html_string);
                    ?>
                    <div class="card<?php print $is_instagram ? " instagram" : ""; ?>">
                        <div class="card_top">
                            <?= $social['icone']?>
                            <p class="bento_card_title"><?= $social['lien']['title']?></p>
                        </div>

                        <a href="<?= $social["lien"]["url"]?>" target="_blank">Suivre</a>
                    </div>
                    <?php endforeach; ?>

        
    </div>



</main>


<?php

wp_footer();
?>