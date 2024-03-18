<?php
wp_head();
?>



<div class="cursor-follower">
        <div class="cursor-follower-inner"></div>
</div>
<main style="padding: 0; position: relative;">
<?php
get_header();
?>
<div class="error_404">
    <h1>Erreur 404</h1>
    <h2>Page introuvable</h2>
    <p>Désolé, la page que tu cherches n'existe pas 😭</p>
    <a href="<?php echo home_url(); ?>">🔍 Retour à l'accueil</a>
</div>

</main>


<?php
get_footer();
?>