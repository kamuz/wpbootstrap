<div class="col-lg-3">
            <?php if(is_active_sidebar('categories')): ?>
            <?php dynamic_sidebar('categories') ?>
            <?php endif; ?>
            <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar') ?>
            <?php endif; ?>
        </div>