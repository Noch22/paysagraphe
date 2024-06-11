<?php /* Template Name: Page d'accueil */
wp_head();

?>
    <main>
        <div class="hero">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                        $galerie_home = get_field('galerie_accueil', 'option');
                        foreach($galerie_home as $image){
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $image['sizes']['1536x1536']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="home_title">
                <h1>Paysagraphe</h1>
                <h2>Concepteur Paysagiste</h2>
                <a href="" class="cta" id="discover">Découvrir</a>
            </div>
        </div>

        <svg viewBox="0 0 1440 239" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M302.18 160.345C192.369 239.38 48.639 243.989 -9.49994 236.413L-90 1.03264e-05L1473.4 -1.03264e-05C1474.6 11.9943 1498.64 19.0646 1460.66 63.759C1413.18 119.627 1075.7 146.772 886.837 146.772C697.972 146.772 439.443 61.5496 302.18 160.345Z" fill="#14492C"/>
        </svg>

        <section class="projects">
            <div class="projects_title_container">
                <div class="projects_title">
                    <h2>Mes projets</h2>
                        <div class="nav">
                                <a class="projet_previous">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 55C16.1929 55 5 43.8071 5 30C5 16.1929 16.1929 5 30 5C43.8071 5 55 16.1929 55 30C55 43.8071 43.8071 55 30 55Z" stroke="#FE5E41" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M35 20L25 30L35 40" stroke="#FE5E41" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a class="projet_next">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 55C43.8071 55 55 43.8071 55 30C55 16.1929 43.8071 5 30 5C16.1929 5 5 16.1929 5 30C5 43.8071 16.1929 55 30 55Z" stroke="#FE5E41" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M25 20L35 30L25 40" stroke="#FE5E41" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                        </div>
                </div>
                <hr>
            </div>
            <div class="projects_container">
                <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'projet'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()){
                        while($query->have_posts()){
                            $query->the_post();
                            ?>
                            
                                <div class="swiper-slide">
                                    <a href="<?= the_permalink()?>">
                                    <?php
                                        $bandeau = get_field('bandeau');
                                        $bandeau ? $text_bandeau = get_field('message_du_bandeau') : ' ';
                                        if($bandeau){
                                            ?>
                                            <div class="bandeau">
                                                <p>
                                                <?php 
                                                    for($i = 0; $i < 58; $i++){
                                                        ?>
                                                        <span><?= $text_bandeau ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                        <div class="project_content">
                                                <h3><?php the_title(); ?></h3>
                                                <p><?php $terms = get_the_terms($post->ID, 'type-de-projet');
                                                    if($terms){
                                                        echo $terms[0]->name;
                                                    }
                                                ?></p>
                                        </div>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </div>
                            
                            <?php
                        }
                    }
                ?>
                </div>
                <div class="swiper-scrollbar"></div>
        </section>

        <section class="about">
            <svg viewBox="0 0 1440 275" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M210.5 139.101C55.7 141.247 5 200.367 -1 229.659V274.938H1593C1574.5 173.424 1534.9 -23.2328 1524.5 2.25763C1511.5 34.1206 1393 52.5676 1300.5 41.164C1208 29.7604 1128.5 18.0214 1023.5 81.412C918.5 144.803 649 75.7102 503 81.412C357 87.1138 404 136.418 210.5 139.101Z" fill="#14492C"/>
            </svg>
            <div class="about_title">
                <h2>À propos</h2>
                <hr>
            </div>
            <div class="about_content">
                <div class="about_image">
                    <?php $image= get_field('image_a_propos', 'option'); ?>
                    <img src="<?= $image['sizes']['large'] ?>" alt="<?= $image["alt"]?>">
                </div>
                <div class="about_text">
                    <h3>Ashley Martinez</h3>
                    <p><?= get_field('description_a_propos', 'option') ?></p>
                    <a href="" class="cta_secondary">En découvrir d'avantage</a>
                </div>
            </div>
            <svg viewBox="0 0 1440 265" fill="none" xmlns="http://www.w3.org/2000/svg" id="bottom_shape">
                <path d="M543.783 214.633C340.198 242.449 112.602 180.083 6.05725 105.711L-130 0.30249L1671 0.302525C1680.84 60.8148 1676.06 151.681 1527.2 128.257C1341.12 98.9766 1175.55 237.179 1004.48 261.189C833.405 285.198 747.369 186.817 543.783 214.633Z" fill="#14492C"/>
            </svg>
        </section>

        <section class="prestations">
            <div class="prestations_title">
                <h2 class="primary_text_color">Mes prestations</h2>
                <hr>
            </div>

            <div class="prestations_container">
                <?php
                    $prestations = get_field('prestations', 'option');
                    if($prestations){
                        foreach($prestations as $prestation){
                            ?>
                            <div class="prestation">
                                <div class="prestation_single_title">
                                    <?= $prestation['icone'] ?>
                                    <h3><?= $prestation['titre'] ?></h3>
                                </div>
                                <p><?= $prestation['description'] ?></p>
                            </div>
                                <?php
                        }}
                ?>
            </div>
        </section>

        <section class="devis">
            <svg viewBox="0 0 1440 191" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M932.889 46.7203C1105.72 16.1791 1379.96 2.84792 1495.48 0L1545.5 191C1085 191 -66.5 189.5 -114.28 189.5C-137.916 189.5 210.273 74.1901 333.793 84.1397C457.313 94.0894 716.854 84.8968 932.889 46.7203Z" fill="#FE5E41"/>
            </svg>

            <div class="devis_title">
                <h2 class="primary_text">Demander un devis</h2>
                <hr>
            </div>
            <div class="devis_content">
                <?= do_shortcode('[contact-form-7 id="ef51c2d" title="Demande de devis"]') ?>
            </div>

        </section>

    </main>
<?php
get_footer();
?>