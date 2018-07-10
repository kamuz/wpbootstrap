<?php if(is_single()): ?>
    <div class="col-md-12">
        <h1><?php the_title() ?></h1>
        <p>
            <small><i class="glyphicon glyphicon-calendar"></i> <?php the_time('d-m-Y') ?> 
            by <i class="glyphicon glyphicon-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></small>
            <i class="glyphicon glyphicon-folder-open"></i> 
            <?php
                $categories = get_the_category();
                $separator = ', ';
                $output = '';
                if($categories){
                    foreach($categories as $category){
                        $output .= '<a href="' . get_category_link($category->term_id).'">' . $category->cat_name . '</a>' . $separator;
                    }
                }
                echo trim($output, $separator);
            ?>
        </p>
        <?php if(has_post_thumbnail()): ?>
            <div class="img-thumbnail">
            <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <p><?php the_content(); ?></p>
        <?php comments_template(); ?>
    </div>
<?php else: ?>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <div class="caption">
            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            <small><i class="glyphicon glyphicon-calendar"></i> <?php the_time('d-m-Y') ?> by <i class="glyphicon glyphicon-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></small>
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink() ?>" class="btn btn-primary" role="button">Read More... &raquo;</a></p>
        </div>
    </div>
</div>
<?php endif; ?>