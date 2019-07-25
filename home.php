<?php get_header() ?>
<div class="container marketing">
    <div class="row">
        <?php get_sidebar() ?>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                </div>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php get_template_part('content', get_post_format()) ?>
                    <?php endwhile; ?>
                    <?php echo paginate_links(); ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>