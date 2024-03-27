                    <!-- タクソノミーを取得する -->
                    <h3>ggggggggggg</h3>
                    <?php
                    $post_type = get_post_type(get_the_ID());
                    $taxonomies = get_object_taxonomies($post_type);


                    $taxonomy_names = wp_get_object_terms(
                        get_the_ID(),
                        $taxonomies,
                        array(
                            "fields" => "all",
                            "orderby" => "taxonomy",
                            "order" => "asc"
                        )
                    );

                    // print_r($taxonomy_names);
                    ?>
                    <!-- タクソノミーを出力 -->

                    <?php
                    if (!empty($taxonomy_names)) :
                        foreach ($taxonomy_names as $tax_name) : ?>

                            <?php
                            // print_r($tax_name);
                            $link = get_term_link($tax_name->term_id, $tax_name->taxonomy);
                            ?>
                            <a href="<?php echo $link; ?>"><?php echo $tax_name->name; ?></a>
                        <?php endforeach; ?>
                    <?php else :  ?>
                    <?php endif;  ?>
