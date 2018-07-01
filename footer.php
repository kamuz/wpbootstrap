    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <hr <?php if(is_front_page()) echo 'class="featurette-divider"'; ?>>
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; <?php echo Date('Y') ?> <?php bloginfo('name') ?>, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>
                </div>
                <script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
                <script src="<?php bloginfo('template_url') ?>/js/holder.min.js"></script>
                <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
                <script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
                <?php wp_footer() ?>
            </div>
        </div>
    </div>
</body>
</html>