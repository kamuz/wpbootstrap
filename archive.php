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
                <div class="col-md-12">
                    <h1 class="page-header">
                        <?php
                        if(is_category()){
                            single_cat_title();
                        }
                        else if(is_tag()){
                            single_tag_title();
                        }
                        else if(is_author()){
                            the_post();
                            echo 'Archive By Author: ' . get_the_author();
                            rewind_posts();
                        }
                        else if(is_day()){
                            echo 'Archive By Day: ' . get_the_date();
                        }
                        else if(is_month()){
                            echo 'Archive By Month: ' . get_the_date('F Y');
                        }
                        else if(is_year()){
                            echo 'Archive By Year: ' . get_the_date('Y');
                        }
                        else{
                            echo 'Archives';
                        }
                        ?>
                    </h1>
                </div>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
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
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>