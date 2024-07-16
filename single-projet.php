<?php wp_head(); ?>
            <?php
                $contenus = get_field('contenu');
                $description = get_field('description');
                get_header();
            ?>
            <main>
                <section class="projet">
                    <svg viewBox="0 0 1440 159" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M302.267 112.176C192.432 159.226 48.6699 161.97 -9.48198 157.46L-106.723 0H1504.88C1506.08 7.1402 1498.99 28.0723 1461 54.6789C1413.52 87.9372 1075.96 104.097 887.055 104.097C698.148 104.097 439.561 53.3636 302.267 112.176Z" fill="#14492C"/>
                    </svg>

                    <div class="projet_title">
                        <h2 class="primary_text"><?= the_title() ?></h2>
                        <p><?= $description ?></p>
                    </div>
                </section>
            </main>
            <?php
               foreach ($contenus as $content) {
                $template_name = $content['acf_fc_layout'];
                $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
                if (file_exists($template_file)) {
            
                    printf('<section class="layout_%s">', $template_name);
                    include($template_file);
                    printf('</section>');
                }
            }
            
            ?>




            <?php get_footer(); ?>





