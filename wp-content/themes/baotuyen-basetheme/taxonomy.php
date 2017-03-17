<?php
/**
 */
get_header();
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>
<main id="content">
    <div class="row">
        <?php get_sidebar() ?>
        <div id="right" class="col-md-8 page-single">
            <div class="box" style="width:100%;">
                <h1><a ><?php echo $term->name ?></a></h1>
                <div class="box_main">

                    <div id="link_br">
                        <a href="<?php echo home_url() ?>" >Trang chủ » </a> <?php echo $term->name ?>
                    </div>
                    <div class="list">
                        <?php
                        if (have_posts()): while (have_posts()): the_post();
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href = "<?php the_permalink() ?>" title = "<?php the_title() ?>">
                                            <?php
                                            if (get_the_post_thumbnail() != "") {
                                                the_post_thumbnail('thumbnail', array('class' => 'img-list'));
                                            } else {
                                                ?>
                                                <img class="img-list" src="<?php echo get_template_directory_uri() . NO_IMAGE ?>">
                                                <?php
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="content">
                                            <h3><?php the_title() ?></h3>
                                            <br>
                                            <p> <?php echo wp_trim_words(get_the_content(), 50) ?></p>
                                        </div>
                                    </div>

                                </div>
                                <hr/>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="pagination">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

