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


    </section>
</main>


<?php
get_footer();
?>