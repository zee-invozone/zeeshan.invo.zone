<?php

/**
 * Title: Recent Blog Posts
 * Slug: bizboost/recent-blog-posts
 * Categories: bizboost, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-recent-blog-posts","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-recent-blog-posts">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis: 100%;">

            <!-- wp:group {"align":"wide","className":"wp-block-group-heading","style":{"spacing":{"blockGap":"14px"}}} -->
            <div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":1.8}},"textColor":"body-text","fontSize":"medium"} -->
                <h6 class="wp-block-heading has-text-align-center has-body-text-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1.8;text-transform:uppercase"><?php esc_html_e('News', 'bizboost') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","className":"wp-block-post-title"} -->
                <h2 class="wp-block-heading has-text-align-center wp-block-post-title"><?php esc_html_e('Recent Blog Posts', 'bizboost') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"alignwide","layout":{"type":"default"}} -->
                <div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
                    <!-- wp:group {"layout":{"type":"default"}} -->
                    <div class="wp-block-group"><!-- wp:group {"className":"wp-block-post-meta","style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
                        <div class="wp-block-group wp-block-post-meta" style="margin-top:0px;margin-bottom:8px"><!-- wp:post-terms {"term":"category"} /-->

                            <!-- wp:post-terms {"term":"post_tag"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"0px","bottom":"0px","left":"0px","top":"0px"}}}} /-->

                        <!-- wp:group {"className":"wp-block-post-meta","style":{"spacing":{"margin":{"top":"14px","bottom":"0"}}},"layout":{"type":"flex","allowOrientation":false}} -->
                        <div class="wp-block-group wp-block-post-meta" style="margin-top:14px;margin-bottom:0"><!-- wp:post-author {"showAvatar":false} /-->

                            <!-- wp:post-date {"isLink":true} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->

                        <!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
                        <div class="wp-block-group alignfull wp-block-post-container"><!-- wp:post-excerpt {"moreText":"Continue Reading"} /--></div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous {"fontSize":"small"} /-->

                    <!-- wp:query-pagination-next {"fontSize":"small"} /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
