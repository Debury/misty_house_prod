<?php
/**
 * The template for displaying product archives (shop page)
 *
 * @package Misty_House
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

// Arrow image URLs (same as your featured‐and‐tshirts templates)
$arrow_left  = get_template_directory_uri() . '/assets/images/arrow_left.png';
$arrow_right = get_template_directory_uri() . '/assets/images/arrow_right.png';
?>

<div class="shop-page-wrapper">

  <!-- Shop Header -->
  <div class="shop-header">
    <h1 class="shop-title"><?php woocommerce_page_title(); ?></h1>
    <div class="shop-description">
      <?php // Optional intro text ?>
    </div>
  </div>

  <!-- Filter Buttons -->
  <div class="shop-filters">
    <button class="filter-btn active" data-filter="all"><?php esc_html_e( 'All', 'misty-house' ); ?></button>
    <?php
    $cats = get_terms([
      'taxonomy'   => 'product_cat',
      'hide_empty' => true,
      'parent'     => 0,
    ]);
    if ( ! is_wp_error( $cats ) && $cats ) {
      foreach ( $cats as $cat ) {
        printf(
          '<button class="filter-btn" data-filter="%1$s">%2$s</button>',
          esc_attr( $cat->slug ),
          esc_html( $cat->name )
        );
      }
    }
    ?>
  </div>

  <!-- Products Grid -->
  <div class="products-container">
    <?php if ( woocommerce_product_loop() ) : ?>
      <div class="products-grid" id="products-grid">
        <?php
        woocommerce_product_loop_start();
        while ( have_posts() ) {
          the_post();
          global $product;

          // Build the data-category attribute
          $terms = get_the_terms( get_the_ID(), 'product_cat' ) ?: [];
          $slugs = array_merge( [ 'all' ], wp_list_pluck( $terms, 'slug' ) );
          $dataCat = implode( ' ', $slugs );
        ?>
          <div class="product-card" data-category="<?php echo esc_attr( $dataCat ); ?>">
            <div class="product-image">
              <a href="<?php the_permalink(); ?>">
                <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'medium' );
                } else {
                  echo '<img src="' . esc_url( wc_placeholder_img_src() ) . '" alt="' . esc_attr( get_the_title() ) . '">';
                }
                ?>
              </a>
            </div>
            <div class="product-info">
              <h3 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="product-meta">
                <span class="product-price"><?php echo $product->get_price_html(); ?></span>
              </div>
            </div>
          </div>
        <?php
        }
        woocommerce_product_loop_end();
        ?>
      </div>
    <?php else : ?>
      <p class="woocommerce-info"><?php esc_html_e( 'No products found', 'misty-house' ); ?></p>
    <?php endif; ?>
  </div>

  <!-- Pagination Controls -->
  <div class="shop-pagination">
    <button class="pagination-arrow prev" aria-label="<?php esc_attr_e( 'Previous page', 'misty-house' ); ?>">
      <img src="<?php echo esc_url( $arrow_left ); ?>" alt="<?php esc_attr_e( 'Prev', 'misty-house' ); ?>">
    </button>
    <div class="pagination-dots"></div>
    <button class="pagination-arrow next" aria-label="<?php esc_attr_e( 'Next page', 'misty-house' ); ?>">
      <img src="<?php echo esc_url( $arrow_right ); ?>" alt="<?php esc_attr_e( 'Next', 'misty-house' ); ?>">
    </button>
  </div>

</div>

<!-- Inline Filtering + Pagination Script -->
<script>
document.addEventListener('DOMContentLoaded', function(){
  jQuery(function($){
    // Cache cards
    var $cards       = $('.product-card'),
        itemsPerPage = 12,
        currentPage  = 1;

    function buildPagination() {
      var visibleCards = $('.product-card:visible'),
          pageCount    = Math.ceil(visibleCards.length / itemsPerPage),
          $dots        = $('.pagination-dots').empty();

      for (var i = 1; i <= pageCount; i++) {
        $dots.append('<button class="dot'+ (i===1?' active':'') +'" data-page="'+i+'"></button>');
      }
      showPage(1);
    }

    function showPage(page) {
      var start = (page-1)*itemsPerPage,
          end   = start + itemsPerPage,
          visibleCards = $('.product-card:visible');

      visibleCards.hide().slice(start, end).fadeIn(200);
      $('.pagination-dots .dot').removeClass('active')
                                .filter('[data-page="'+page+'"]')
                                .addClass('active');
      currentPage = page;
    }

    // Initial display
    buildPagination();

    // Prev/Next
    $('.pagination-arrow.next').on('click', function(){
      var pageCount = $('.pagination-dots .dot').length;
      if (currentPage < pageCount) showPage(currentPage+1);
    });
    $('.pagination-arrow.prev').on('click', function(){
      if (currentPage > 1) showPage(currentPage-1);
    });

    // Dot click
    $('.pagination-dots').on('click', '.dot', function(){
      showPage(parseInt($(this).data('page'),10));
    });

    // Filter click
    $('.filter-btn').on('click', function(){
      var filter = $(this).data('filter');
      $('.filter-btn').removeClass('active');
      $(this).addClass('active');

      $cards.each(function(){
        var cats = $(this).data('category').split(' ');
        if (filter === 'all' || cats.indexOf(filter)!==-1) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });

      // Rebuild pagination on filter
      buildPagination();
    });
  });
});
</script>

<?php
get_footer( 'shop' );
