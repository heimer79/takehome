
<footer>
    <div>
        <?php 
        if ( is_active_sidebar( 'footer' ) ) {
            dynamic_sidebar( 'footer' );
        }
        ?>
    </div>
    <section>
        <div>
            <?php 
        if ( is_active_sidebar( 'copyright-first-column' ) ) {
            dynamic_sidebar( 'copyright-first-column' );
        }
        ?>
        </div>
        <div>
            <?php 
        if ( is_active_sidebar( 'copyright-second-column' ) ) {
            dynamic_sidebar( 'copyright-second-column' );
        }
        ?>

        </div>
        <div>
            <?php 
        if ( is_active_sidebar( 'Copyright third column' ) ) {
            dynamic_sidebar( 'Copyright third column' );
        }
        ?>

        </div>
    </section>
</footer>

<?php
wp_footer();
?>
</body>

</html>