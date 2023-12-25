<div class="mobile-bottom-navigation">
    <?php if (basename($_SERVER['REQUEST_URI']) == 'index.php') : ?>

        <a href="./index.php" class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </a>

        <a href="./View/search.php" class="action-btn">
            <ion-icon name="search-outline"></ion-icon>
        </a>

        <a href="./View/product.php" class="action-btn">
            <ion-icon name="add-outline"></ion-icon>
        </a>

        <a href="./View/contact.php" class="action-btn">
            <ion-icon name="mail-outline"></ion-icon>

            <span class="count">3</span>
        </a>

        <a href="./View/profile.php" class="action-btn">
            <ion-icon name="person-outline"></ion-icon>

            <span class="count">1</span>
        </a>

    <?php elseif (basename($_SERVER['REQUEST_URI']) == 'search.php' || basename($_SERVER['REQUEST_URI']) == 'profile.php' || basename($_SERVER['REQUEST_URI']) == 'contact.php' || basename($_SERVER['REQUEST_URI']) == 'product.php') : ?>

        <a href="../index.php" class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </a>

        <a href="./search.php" class="action-btn">
            <ion-icon name="search-outline"></ion-icon>
        </a>

        <a href="./product.php" class="action-btn">
            <ion-icon name="add-outline"></ion-icon>
        </a>

        <a href="./contact.php" class="action-btn">
            <ion-icon name="mail-outline"></ion-icon>

            <span class="count">3</span>
        </a>

        <a href="./profile.php" class="action-btn">
            <ion-icon name="person-outline"></ion-icon>

            <span class="count">1</span>
        </a>

    <?php elseif (basename($_SERVER['REQUEST_URI']) == 'detailsarticle.php' || basename($_SERVER['REQUEST_URI']) == 'favoris.php' || basename($_SERVER['REQUEST_URI']) == 'dressing.php') : ?>

        <a href="../../index.php" class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </a>

        <a href="../search.php" class="action-btn">
            <ion-icon name="search-outline"></ion-icon>
        </a>

        <a href="../product.php" class="action-btn">
            <ion-icon name="add-outline"></ion-icon>
        </a>

        <a href="../contact.php" class="action-btn">
            <ion-icon name="mail-outline"></ion-icon>

            <span class="count">3</span>
        </a>

        <a href="../profile.php" class="action-btn">
            <ion-icon name="person-outline"></ion-icon>

            <span class="count">1</span>
        </a>

    <?php endif; ?>

    <!-- Pour déployer menu utiliser data-mobile-menu-open-btn
        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="mail-outline"></ion-icon>

            <span class="count">3</span>
        </button>

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="person-outline"></ion-icon>
            <span class="count">1</span>
        </button>
    -->
</div>