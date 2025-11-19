<?php
/**
 * The front page template file
 *
 * @package Restaurant_Premium
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    // Welcome Section
    ?>
    <section class="content-section" style="background-color: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Bienvenue dans Notre Restaurant</h2>
            <p class="section-subtitle">Une expérience culinaire inoubliable vous attend</p>

            <div class="grid grid-3" style="margin-top: 3rem;">
                <div class="card">
                    <div class="card-image" style="display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #d4af37 0%, #b8941f 100%);">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.1 13.34L10.27 13.77L10.7 15.94M11.74 18.67L12 18.86L12.25 18.67L15 16.77L16.19 18.5L12.04 21.65C12.02 21.67 12 21.68 11.98 21.69C11.96 21.7 11.94 21.71 11.91 21.71C11.88 21.71 11.86 21.7 11.83 21.69C11.81 21.68 11.79 21.67 11.77 21.65L7.62 18.5L8.81 16.77L11.74 18.67Z" stroke="#2c2c2c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 8C14.21 8 16 6.21 16 4C16 1.79 14.21 0 12 0C9.79 0 8 1.79 8 4C8 6.21 9.79 8 12 8Z" fill="#2c2c2c"/>
                            <path d="M3 12H21M12 2V12M16 8V12M8 8V12" stroke="#2c2c2c" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Menu Raffiné</h3>
                        <p class="card-text">Découvrez notre sélection de plats préparés avec des ingrédients frais et de saison.</p>
                        <a href="#menu" class="btn btn-primary">Voir le Menu</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image" style="display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #8B4513 0%, #654321 100%);">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="#f8f8f8" stroke-width="2"/>
                            <path d="M3 9H21M9 21V9M16 12V16M12 12V18" stroke="#f8f8f8" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Réservation</h3>
                        <p class="card-text">Réservez votre table en ligne et profitez d'une expérience sans souci.</p>
                        <a href="#reservation" class="btn btn-primary">Réserver</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image" style="display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #d4af37 0%, #8B7355 100%);">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="9" stroke="#2c2c2c" stroke-width="2"/>
                            <path d="M12 6V12L16 14" stroke="#2c2c2c" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Horaires</h3>
                        <p class="card-text">Ouvert du mardi au dimanche. Service midi et soir pour votre plaisir.</p>
                        <a href="#contact" class="btn btn-primary">Nous Contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // About Section
    ?>
    <section class="content-section">
        <div class="container">
            <div class="grid grid-2" style="align-items: center; gap: 4rem;">
                <div>
                    <h2 class="section-title" style="text-align: left;">Notre Histoire</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Depuis plus de 20 ans, nous perpétuons une tradition d'excellence culinaire.
                        Notre chef et son équipe sélectionnent chaque jour les meilleurs produits pour
                        vous offrir une expérience gastronomique unique.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Dans un cadre élégant et chaleureux, laissez-vous transporter par des saveurs
                        authentiques et créatives qui raviront vos papilles.
                    </p>
                    <a href="#" class="btn btn-primary">En Savoir Plus</a>
                </div>
                <div style="background: linear-gradient(135deg, #d4af37 0%, #2c2c2c 100%); height: 400px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <svg width="120" height="120" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#f8f8f8" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17M2 12L12 17L22 12" stroke="#f8f8f8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Menu Highlights Section
    ?>
    <section class="content-section" style="background-color: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Nos Spécialités</h2>
            <p class="section-subtitle">Découvrez quelques-uns de nos plats signature</p>

            <div class="grid grid-2" style="margin-top: 3rem;">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="menu-item-name">Filet de Bœuf Rossini</h3>
                        <span class="menu-item-price">38€</span>
                    </div>
                    <p class="menu-item-description">
                        Filet de bœuf tendre accompagné de foie gras poêlé, sauce aux truffes et légumes de saison
                    </p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="menu-item-name">Homard Thermidor</h3>
                        <span class="menu-item-price">45€</span>
                    </div>
                    <p class="menu-item-description">
                        Homard breton gratiné au four, sauce moutardée au champagne, pommes grenailles
                    </p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="menu-item-name">Risotto aux Champignons</h3>
                        <span class="menu-item-price">26€</span>
                    </div>
                    <p class="menu-item-description">
                        Risotto crémeux aux cèpes et champignons de Paris, copeaux de parmesan
                    </p>
                </div>

                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="menu-item-name">Millefeuille Vanille</h3>
                        <span class="menu-item-price">12€</span>
                    </div>
                    <p class="menu-item-description">
                        Feuilletage croustillant, crème pâtissière à la vanille de Madagascar, glaçage fondant
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="#" class="btn btn-primary">Voir le Menu Complet</a>
            </div>
        </div>
    </section>

    <?php
    // Testimonials Section
    ?>
    <section class="content-section">
        <div class="container">
            <h2 class="section-title">Ce Que Disent Nos Clients</h2>
            <p class="section-subtitle">Ils nous ont fait confiance</p>

            <div class="grid grid-3" style="margin-top: 3rem;">
                <div class="card">
                    <div class="card-content">
                        <p style="font-style: italic; margin-bottom: 1rem; color: #666;">
                            "Une expérience culinaire exceptionnelle ! Les plats sont délicieux et le service impeccable.
                            Je recommande vivement !"
                        </p>
                        <p style="font-weight: 600; color: var(--primary-color);">— Marie Dubois</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p style="font-style: italic; margin-bottom: 1rem; color: #666;">
                            "Le meilleur restaurant de la région. L'ambiance est chaleureuse et les saveurs sont au rendez-vous.
                            Bravo au chef !"
                        </p>
                        <p style="font-weight: 600; color: var(--primary-color);">— Jean Martin</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p style="font-style: italic; margin-bottom: 1rem; color: #666;">
                            "Cadre élégant, cuisine raffinée et personnel aux petits soins. Une adresse à ne pas manquer !"
                        </p>
                        <p style="font-weight: 600; color: var(--primary-color);">— Sophie Laurent</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Call to Action
    ?>
    <section class="content-section" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #1a1a1a 100%); color: var(--white); text-align: center;">
        <div class="container">
            <h2 class="section-title" style="color: var(--primary-color); font-size: 3rem;">Réservez Votre Table</h2>
            <p style="font-size: 1.3rem; margin-bottom: 2rem; color: var(--light-bg);">
                Vivez une expérience gastronomique inoubliable
            </p>
            <a href="#reservation" class="btn btn-primary" style="font-size: 1.2rem; padding: 1.2rem 2.5rem;">
                Réserver Maintenant
            </a>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
