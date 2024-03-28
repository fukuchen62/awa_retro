<?php get_header(); ?>

<main>

  <section class="title">
    <div class="title_box">
      <h2>コラム・情報</h2>
    </div>
  </section>

  <div class="btn_container">
    <div class="btn_item">
      <!-- <img src="../uploads/gallery_bg2.png" alt="" class="bg"> -->
      <a href="#">
        <p class="btn_item_text">インタビュー</p>
      </a>
    </div>
    <div class="btn_item">
      <a href="#">
        <p class="btn_item_text">豆知識</p>
      </a>
    </div>
    <div class="btn_item">
      <a href="#">
        <p class="btn_item_text">体験</p>
      </a>
    </div>
    <div class="btn_item">
      <a href="#">
        <p class="btn_item_text">コラム</p>
      </a>
    </div>
  </div>


  <section id="colamn_container" class="colamn_container">

    <div class="colamn_box">

      <!-- カード ============ -->
      <!-- 直近の3件の投稿を取得して出力 -->
      <?php
      // 検索条件を定義
      $myspot = [
        'post_type' => 'special', // 投稿タイプ
        'posts_per_page' => '6', // 6件を取得
        'orderby' => 'asc' //
      ];
      // クエリを実行する
      $query = new WP_Query($myspot);
      ?>

      <!-- WordPress ループの開始 -->
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : ?>
          <?php $query->the_post(); ?>
          <div class="colamn_card">

            <!-- カード全体をhoverした時のリンク -->
            <a href="colamn_detail.html" tabindex="-1"></a>

            <!-- 内側枠(飾り) -->
            <div class="colamn_card_inner"></div>

            <!-- カード画像 -->
            <div class="colamn_contant_img">
              <!-- <img src="../uploads/baic.jpg" alt="周辺スポットの写真"> -->
              <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示
              ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : // なければnoimage画像をデフォルトで表示
              ?>
                <img src="<?php echo get_template_directory_uri() ?>/images/dummy6.jpg" alt="周辺スポットの写真">
              <?php endif; ?>
            </div>

            <!-- カードタグ -->
            <!-- タクソノミーを取得する -->
            <?php
            $post_type = get_post_type(get_the_ID());
            $taxonomies = get_object_taxonomies($post_type);

            // $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names", "orderby" => "count"));

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

            <div class="colamn_contant_tag">
              <!-- <a href="#">豆知識</a>
              <a href="#">体験</a>
              <a href="#">コラム</a> -->

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

            </div>


            <!-- カードタイトル -->
            <div class="colamn_content_name">
              <h3>
                <!-- ギャラリー喫茶グレイス <br>昭和53年創業 -->
                <?php the_field('sp_title1'); ?>
              </h3>
            </div>

            <!-- カードテキスト -->
            <div class="colamn_contant_text">
              <!-- <p> -->
              <!-- ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。 -->
              <!-- </p> -->
            </div>

          </div>
          <!-- WordPress ループの終了 -->
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>



    </div>



  </section>

  <!-- ページナビゲーション -->
  <?php if (function_exists('wp_pagenavi')) : ?>
    <div class="pagination_box">
      <div class="pagination">
        <?php wp_pagenavi(); ?>
        <!-- <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#" class="active">2</a>
      <a href="#">3</a>
      <a href="#">&raquo;</a> -->
      </div>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
