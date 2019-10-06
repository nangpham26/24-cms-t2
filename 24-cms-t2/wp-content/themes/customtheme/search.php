<?php get_header() ?>
<!-- Page Content -->
  <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <h1 class="my-2 mb-4 page-header">
            Tìm Kiếm:
            <small><?php the_search_query(); ?></small>
        </h1>

          <?php if( have_posts() ) : ?> <!-- Kiem tra neu co bai viet -->
            <?php while ( have_posts() )  : the_post(); ?> <!-- tien hanh lap bai viet -->
              <?php get_template_part( 'template-parts/content', get_post_format() ); ?> <!-- ham lay noi dung -->
            <?php endwhile; ?>

          <?php else: ?>

            <p>
              không có bài viết nào phù hợp với từ khóa bạn cần tìm: <strong><?php
                the_search_query(); ?></strong>
            </p>

            <form action="<?php echo bloginfo('url'); ?>">
              <div class="input-group">
                <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" placeholder="Search for.........">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span> 
              </div>
            </form>

          <?php endif; ?>

          

          <!-- Pagination -->
          <?php blog_pagination() ?>

        </div>

        <?php get_sidebar() ?>

      </div>
      <!-- /.row -->

  </div>
<!-- /.container -->
<?php get_footer() ?>
