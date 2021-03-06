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
                    <h1 class="page-header">Search Results for <?php echo get_search_query() ?></h1>
                </div>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php get_template_part('content', get_post_format()) ?>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>