<?php get_header() ?>
<main>
    <div class="content">
        <?php if ( is_active_sidebar( 'post_widget_block' ) ) : ?>
            <div id="post_widget_block" class="sidebar">
                <?php dynamic_sidebar( 'post_widget_block' ); ?>
            </div>
        <?php endif; ?>
        <div class="post-block">
            <div class="post-name">
                <ul>
                <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                    <li><?php the_title(); ?></li>
                    <?php endwhile;else: ?>
                <?php endif; ?>
                </ul>
            </div>
            <div class="post-content">
                <ul>
                <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                    <div>
                        <span><?php the_title(); ?></span>
                        <?php the_content(__('(...)')) ?>
                    </div>
                    <?php endwhile;else: ?>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</main>
<section class="slider-block">
    <?php if ( is_active_sidebar( 'footer_widget_block' ) ) : ?>
        <div id="footer_widget_block" class="sidebar">
            <?php dynamic_sidebar( 'footer_widget_block' ); ?>
        </div>
    <?php endif; ?>
</section>
<?php get_footer() ?>