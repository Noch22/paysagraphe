<header>
    <div class="close">
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>
   <div class="open">
        <div class="menu">
            <ul>
                <? $home = get_home_url(); ?>
                <li><a href="<?= $home."#accueil" ?>">Accueil</a></li>
                <li><a href="<?= $home."#projets" ?>">Projets</a></li>
                <li><a href="<?= $home."#apropos" ?>">À Propos</a></li>
                <li><a href="<?= $home."#contact" ?>">Contact</a></li>
            </ul>
        </div>
        <div class="right">
            <div class="devis_circle">
                <div class="text">
                    <p>Devis - Devis - Devis - Devis - Devis -</p>
                </div>
                <a href="<?= $home."#devis" ?>" class="circle_devis">Demander un devis</a>
            </div>
        </div>

   </div>
</header>