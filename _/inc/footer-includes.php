    <?php
        // Figure out what our server name is
        $host = $_SERVER['SERVER_NAME'];
        // check if we are in the dev environment
        if ($host == 'localhost' || $host == 'app.dev') {
            // we're on dev, so include the JavaScript individually for easier debugging
            include 'footer-scripts.php';
        } else {
            // if production, provide the compiled and uglified JS files
            echo '<script type="text/javascript" src="' . get_template_directory_uri() . '/_/js/app.footer.min.js"></script>' . "\n";
        }
    ?>