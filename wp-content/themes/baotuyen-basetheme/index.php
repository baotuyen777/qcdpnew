<?php
/**
 * Template Name: Home
 */
get_header();
?>
<div id="slider">
    <div style="width: none" id="featured">
        <img data-caption="#slide1" src="<?php echo get_template_directory_uri() ?>/img/Untitled-1.jpg" width="1000" height="300" />
        </a>
        <img data-caption="#slide2" src="<?php echo get_template_directory_uri() ?>/img/wqk1467888094.jpg" width="1000" height="300" />
        </a>
    </div>
    <div class="orbit-caption" id="slide1">
        <div class="slider_top">
            <h2><a href="http://demo1.skyvietnam.com.vn/quanson/chu-inox-chu-noi">Chữ INOX</a></h2> Với công nghệ làm biển công ty chất liệu inox và biển công ty bằng đồng hiện đang là 2 loại biển quảng cáo giữ thứ hạng cao theo xếp hạng yêu cầu làm biển quảng cáo, biển tên công ty cho doanh nghiệp.
            <div class="read">
                <a href="http://demo1.skyvietnam.com.vn/quanson/chu-inox-chu-noi">Xem chi tiết</a>
            </div>
        </div>
    </div>
    <div class="orbit-caption" id="slide2">
        <div class="slider_top">
            <h2><a href="http://demo1.skyvietnam.com.vn/quanson/den-led-trang-tri">Đèn Led trang trí</a></h2> Hiện nay có rất nhiều loại LED với đầy đủ các kích thước, hình dáng và màu sắc khác nhau, rất thích hợp dùng để trang trí. Được chế tạo từ vật liệu polyme, LED có độ bền cao, dễ vận chuyển.
            <div class="read">
                <a href="http://demo1.skyvietnam.com.vn/quanson/den-led-trang-tri">Xem chi tiết</a>
            </div>
        </div>
    </div>
</div>

<div id="vien_slider"></div>

<main id="content">
    <div class="row">
        <?php get_sidebar() ?>
        <div id="right" class="col-md-8">
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
    </div>
</main>

<?php get_footer(); ?>