<?php get_header() ?>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <h1><?php the_title() ?></h1>
                            <?php if(page_is_parent() || $post->post_parent > 0): ?>
                            <ul>
                                <li><a href="<?php echo get_the_permalink(get_top_parent()) ?>"><?php echo get_the_title(get_top_parent()) ?></a></li>
                                <?php
                                    $arg = array(
                                        'child_of' => get_top_parent(),
                                        'title_li' => ''
                                    );
                                    wp_list_pages($arg);
                                ?>
                            </ul>
                            <?php endif; ?>
                            <?php if(has_post_thumbnail()): ?>
                                <div class="img-thumbnail">
                                <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <p><?php the_content(); ?></p>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>