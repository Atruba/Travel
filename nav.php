<header class="header header-mobile">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="index.php" class="logo"><i class="fas fa-paper-plane"></i>Digital Backpackers</a>
    <nav class="navbar navbar-mobile navbar-mobile.active">
        <?php
        $navLinks = [
            ['href' => 'index.php', 'text' => 'Home', 'class' => 'cs-active'],
            ['href' => 'About.php', 'text' => 'About', 'class' => ''],
        ];

        foreach ($navLinks as $link) {
            echo '<a href="' . $link['href'] . '" class="' . $link['class'] . '">' . $link['text'] . '</a>';
        }
        ?>

        <span class="services-option">
            <div class="dropdown">
                <button class="dropbutton">Services</button>
                <div class="dropdown-content">
                    <?php
                    $dropdownLinks = [
                        ['href' => 'Destinations.php', 'text' => 'Digital Guides'],
                        ['href' => 'bookings.php', 'text' => 'Bookings'],
                        ['href' => 'Map.php', 'text' => 'Interactive Map', 'class' => 'active'],
                    ];

                    foreach ($dropdownLinks as $link) {
                        echo '<a href="' . $link['href'] . '" class="' . ($link['class'] ?? '') . '">' . $link['text'] . '</a>';
                    }
                    ?>
                </div>
            </div>
        </span>
        <span class="services-option">
            <a href="contact.php">contact us</a>
        </span>

       
    </nav>
    <form method="post" action="register.php">
            <input href="Signin.php" type="submit" class="btn btn-mobile" name="SignOut" value="Sign In">
        </form>
</header>
<br><br><br>