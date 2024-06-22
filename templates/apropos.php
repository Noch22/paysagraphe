<?php /* Template Name: À propos */
wp_head();

?>

<main>
    <section class="apropos">
        <div class="apropos_title">
            <h2 class="primary_text">À propos</h2>
        </div>
        <svg viewBox="0 0 1440 107" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M302.267 73.7228C192.432 107.161 48.67 109.111 -9.48196 105.906L-92 0.810489L1515.56 0.810486C1516.76 5.88497 1498.99 13.9507 1461 32.8598C1413.52 56.4962 1075.96 67.9806 887.055 67.9806C698.148 67.9806 439.561 31.9251 302.267 73.7228Z" fill="#14492C"/>
        </svg>

        <div class="apropos_content">
            <h2 class="primary_text_color">ASHLEY MARTINEZ</h2>
            <p><?php
                $about_text = get_field('texte_page_a_propos', 'option');
                if($about_text){
                    echo $about_text;
                }
            ?>
            
            </p>
        </div>

        <div class="recompenses">
            <svg viewBox="0 0 1440 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M210.5 139.101C55.7 141.247 -92.0001 200.367 -98.0001 229.659L-191 285H1593C1574.5 183.486 1534.9 -23.2327 1524.5 2.25773C1511.5 34.1207 1393 52.5677 1300.5 41.1641C1208 29.7605 1128.5 18.0215 1023.5 81.4121C918.5 144.803 649 75.7103 503 81.4121C357 87.1139 404 136.418 210.5 139.101Z" fill="#14492C"/>
            </svg>
            <div class="recompenses_title">
                <h2 class="primary_text">Récompenses</h2>
                <hr>
            </div>
            <div class="recompenses_content">
                <?php
                    $recompenses = get_field('recompenses', 'option');
                    if($recompenses){
                        foreach($recompenses as $recompense){
                            ?>
                            <div class="recompense_single">
                                <div class="recompense_single_text">
                                    <h3><?=$recompense['titre']?></h3>
                                    <p><?=$recompense['description']?></p>
                                </div>
                                <div class="recompense_single_image">
                                    <img src="<?=$recompense['image']['sizes']['medium']?>" alt="<?=$recompense['image']['alt']?>" width="<?= $recompense['image']['sizes']['medium-width'] ?>" height="<?= $recompense['image']['sizes']['medium-height'] ?>">
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>

        </div>


    </section>
</main>


<?php
get_footer();
?>