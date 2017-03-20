<?php
get_header();
?>
<main id="content">
    <div class="row">
        <div id="right" class="page-single col-md-8">
            <div class="box" style="width:100%;">
                <?php
                if (have_posts()): while (have_posts()): the_post();
                        ?>
                        <h1><a href="#"><?php the_title() ?></a></h1>
                        <div class="box_main">

                            <div id="link_br">
                                <a href="<?php echo home_url() ?>" >Trang chủ » </a> <?php the_title() ?>
                            </div>
                            <div class="keugoi">
                                <div class="wrap-avatar">
                                    <a href = "<?php the_permalink() ?>" title = "<?php the_title() ?>">
                                        <?php the_post_thumbnail('large')
                                        ?>
                                    </a>
                                </div>
                                <p><?php the_content() ?></p>
                            </div>
                            <div style="clear: both;"></div>
                            <hr>
                            <!--Chia Sẻ-->
                            <div id="chiase">
                                <div style=" float: left;margin-top: -5px; ">
                                    <div class="fb-like fb_iframe_widget" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" 
                                         fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=<?php the_permalink() ?>&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 127px; height: 20px;">
                                            <iframe name="f240ae90af0b3c4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.5/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fao6eUeuGXQq.js%3Fversion%3D42%23cb%3Dfb496b4a956fbc%26domain%3Dquangcaoquanson.com%26origin%3Dhttp%253A%252F%252Fquangcaoquanson.com%252Ff142941a0502298%26relation%3Dparent.parent&amp;container_width=0&amp;href=<?php the_permalink() ?>&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 127px; height: 20px;" class=""></iframe></span></div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
</main>
<?php get_footer(); ?>