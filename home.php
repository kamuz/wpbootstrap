<?php get_header() ?>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">Cras justo odio</a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
        <div class="col-lg-9">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
            <div class="row">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <div class="caption">
                                <small><i class="glyphicon glyphicon-calendar"></i> <?php the_time('d-m-Y') ?> by <i class="glyphicon glyphicon-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></small>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <p><a href="<?php the_permalink() ?>" class="btn btn-primary" role="button">Read More... &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>