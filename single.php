<?php get_header() ?>
<div class="container marketing">
    <div class="row">
        <?php get_sidebar() ?>
        <div class="col-lg-9">
            <div class="row">
            <?php $terms = get_the_terms( get_the_ID(), 'custom' ); ?>
            <?php if( ! empty( $terms ) ) : ?>
                <?php foreach( $terms as $term ) : ?>
                    <?php $termID = $term->term_id ?>
                    <?php $termMeta = get_term_meta( $termID ); ?>
                    <?php $attachmentID = $termMeta['cm_icon'][0]; ?>
                    <?php echo wp_get_attachment_image($attachmentID, 'full'); ?>
                <?php endforeach; ?>
            <?php endif; ?>
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