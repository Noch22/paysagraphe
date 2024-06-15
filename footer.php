<footer>
   <ul>
    <li><a href="">Mentions légales</a></li>
    <li><p>Paysagraphe © <?= date("Y")?></p></li>
    <li>
        <ul class="footer_social">
            <?php 
            $social = get_field('reseaux_sociaux', 'option');
                if($social){
                    foreach($social as $s){
                        ?>
                        <li><a href="<?= $s['lien_vers_le_profil'] ?>" target="_blank"><?= $s['icone'] ?></a></li>
                        <?php
                    }
                }
            ?>
        </ul>
    </li>
   </ul>
</footer>




<?php
wp_footer();
?>