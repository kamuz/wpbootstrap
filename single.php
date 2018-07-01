<?php get_header() ?>
<div class="container marketing">
    <div class="row">
        <?php get_sidebar() ?>
        <div class="col-lg-9">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
            <div class="row">
                <div class="col-lg-12">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <h1><?php the_title() ?></h1>
                            <p><small><i class="glyphicon glyphicon-calendar"></i> <?php the_time('d-m-Y') ?> by <i class="glyphicon glyphicon-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></small></p>
                            <?php if(has_post_thumbnail()): ?>
                                <div class="img-thumbnail">
                                <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <p><?php the_content(); ?></p>
                            <?php comments_template(); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>