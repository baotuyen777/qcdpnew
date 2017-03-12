<?php
/**
 * Template Name: Home
 */
get_header();
?>
<div id="right">
    <?php
    $terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
    ));
    foreach ($terms as $term):
        ?>
        <div class="wrap_category">
            <div class="box_top">
                <a href="<?php echo get_category_link($term) ?>" title="<?php echo $term->name ?>"><?php echo $term->name ?></a>
            </div>
            <div id="owl-<?php echo $term->term_id ?>" class="owl-carousel">
                <?php
                $param = array(
                    'post_type' => 'product',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => $term->term_id,
                        ),
                    ),
                );
                $query = new WP_Query($param);

                $count = ($query->post_count);
                $i = 0;
                if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                        $i++;
                        if ($i == 1 || ($i - 1) % 2 == 0):
                            ?>
                            <div class="itemchay<?php echo $i ?>">
                            <?php endif; ?>
                            <div class="item">
                                <div class="box_img">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                        <?php the_post_thumbnail('thumbnail') ?>
                                    </a>
                                </div>
                                <a class="box_name" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </div>
                            <?php if ($i == $count || $i % 2 == 0): ?>
                            </div>
                        <?php endif; ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <script>
                $("#owl-<?php echo $term->term_id ?>").owlCarousel({
                    navigation: true,
                    navigationText: ["<", ">"],
                    autoPlay: 5000,
                    items: 4,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3]
                });
            </script>
        </div>
    <?php endforeach; ?>


</div>


<?php get_footer(); ?>