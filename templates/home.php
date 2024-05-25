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
                    <br><br><br><br>
        </section>

    </main>
<?php
get_footer();
?>