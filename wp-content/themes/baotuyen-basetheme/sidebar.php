<div id="left">
    <?php
    $terms = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
//        'orderby' => 'name',
//        'order' => 'DESC'
    ));
    foreach ($terms as $term):
        if ($term->term_id == 3)
            continue;
        ?>
        <div class="box">
            <div class="box_top">
                <a href="<?php echo get_category_link($term) ?>"><?php echo $term->name ?></a>
            </div>
            <div class="box_main ">
                <ul id="menu_left">
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
                    if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                <ul class="menu_sub_left ">
                                </ul>
                            </li>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>


    <?php endforeach; ?>


</div>