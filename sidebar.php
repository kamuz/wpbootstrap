<div class="col-lg-3">
    <div class="well">
        <form role="search" method="get" action="<?php esc_url(home_url('/')) ?>">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="s">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <?php if(is_active_sidebar('categories')): ?>
        <?php dynamic_sidebar('categories') ?>
    <?php endif; ?>
    <?php if(is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar') ?>
    <?php endif; ?>
</div>