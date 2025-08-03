<?php
/**
 * Single Product template override
 * @package Misty_House
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>

<div class="custom-single-product">
  <?php while ( have_posts() ) : the_post(); global $product; ?>
    <div class="product-main">

      <!-- LEFT: Images -->
      <div class="product-image-section">
        <div class="main-product-image">
          <?php echo $product->get_image( 'large' ); ?>
        </div>
        <div class="product-gallery">
          <?php
            $ids     = $product->get_gallery_image_ids();
            $main_id = $product->get_image_id();
            $shown   = 0;
            foreach ( $ids as $id ) {
              if ( $id === $main_id ) continue;
              if ( $shown++ >= 3 ) break;
              echo wp_get_attachment_image( $id, 'thumbnail' );
            }
          ?>
        </div>
      </div>

      <!-- RIGHT: Details, size, stock, qty, buy -->
      <div class="product-details">
        <div class="product-info-top">
          <h1 class="product-series-title"><?php echo esc_html( $product->get_name() ); ?></h1>
          <p class="product-handle">
            @<?php
              $cats = get_the_terms( $product->get_id(), 'product_cat' );
              echo ( $cats && ! is_wp_error( $cats ) )
                ? esc_html( $cats[0]->name )
                : 'Horebass';
            ?>
          </p>

          <div class="product-description-text">
            <?php
              $d = $product->get_description() ?: $product->get_short_description();
              echo wpautop( wp_kses_post( $d ?: 'No description.' ) );
            ?>
          </div>

          <div class="price-section">
            <div class="main-price">
              <?php
                if ( $product->is_type( 'variable' ) ) {
                  $found = '';
                  foreach ( $product->get_children() as $v_id ) {
                    $v = wc_get_product( $v_id );
                    if ( $v && $v->is_in_stock() ) {
                      $found = $v->get_price_html();
                      break;
                    }
                  }
                  echo $found ?: $product->get_price_html();
                } else {
                  echo $product->get_price_html();
                }
              ?>
            </div>
            <div class="stock-status" id="mh-stock-status">
              <?php echo $product->is_in_stock() ? 'IN STOCK' : '<span class="out-of-stock">OUT OF STOCK</span>'; ?>
            </div>
          </div>
        </div>

        <div class="product-actions">
          <form class="variations_form cart" method="post" enctype="multipart/form-data">
            <div class="size-selector">
              <?php
                $sizes = [ 'S','M','L','XL','XXL' ];
                $avail = [];

                // build availability for variable
                if ( $product->is_type( 'variable' ) ) {
                  foreach ( $product->get_children() as $v_id ) {
                    $v = wc_get_product( $v_id );
                    foreach ( $v->get_attributes() as $k => $val ) {
                      if ( stripos( $k, 'size' ) !== false ) {
                        $sz        = strtoupper( $val );
                        $stock_qty = max( 0, $v->get_stock_quantity() );
                        $in_stock  = $v->is_in_stock() && $stock_qty > 0;
                        $avail[ $sz ] = [
                          'id'        => $v_id,
                          'stock'     => $stock_qty,
                          'in_stock'  => $in_stock,
                          'price'     => $v->get_price_html(),
                        ];
                        break;
                      }
                    }
                  }
                }

                // Render size buttons
                foreach ( $sizes as $s ) {
                  if ( $product->is_type( 'variable' ) ) {
                    $ok    = ! empty( $avail[ $s ] ) && $avail[ $s ]['in_stock'];
                    $cls   = $ok ? 'size-btn' : 'size-btn disabled';
                    $attr  = $ok ? '' : 'disabled';
                    $v_id  = $avail[ $s ]['id']    ?? '';
                    $stk   = $avail[ $s ]['stock'] ?? 0;
                    printf(
                      '<button type="button" class="%1$s" data-variation-id="%2$d" data-stock="%3$d" %4$s>%5$s</button>',
                      esc_attr( $cls ),
                      absint( $v_id ),
                      absint( $stk ),
                      $attr,
                      esc_html( $s )
                    );
                  } else {
                    $stock = max( 0, $product->get_stock_quantity() );
                    $ok    = $product->is_in_stock() && $stock > 0;
                    $cls   = $ok ? 'size-btn selected' : 'size-btn disabled';
                    $attr  = $ok ? '' : 'disabled';
                    printf(
                      '<button type="button" class="%1$s" data-stock="%2$d" %3$s>%4$s</button>',
                      esc_attr( $cls ),
                      absint( $stock ),
                      $attr,
                      esc_html( $s )
                    );
                    break; // simple only one
                  }
                }
              ?>
              <input type="hidden" name="selected_size" id="selected_size" required>
              <input type="hidden" name="variation_id"  id="variation_id">
            </div>

            <div class="quantity-selector">
              <label for="mh-quantity">Quantity:</label>
              <input
                type="number"
                name="quantity"
                id="mh-quantity"
                value="1"
                min="1"
                max="1"
                disabled>
            </div>

            <input
              type="hidden"
              name="add-to-cart"
              value="<?php echo esc_attr( $product->get_id() ); ?>">

            <button
              type="submit"
              class="buy-button"
              id="mh-buy-button"
              disabled>
              BUY THIS SHIT!!!
            </button>
          </form>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  <div class="featured-section">
    <?php get_template_part( 'template-parts/featured-products' ); ?>
  </div>
  <div class="social-mosaic-section">
    <?php get_template_part( 'template-parts/social' ); ?>
  </div>
</div>

<?php get_footer(); ?>


<style>
/*—— Quantity picker ——*/
.quantity-selector {
  margin-top: 15px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.quantity-selector label {
  color: #fff;
  font-size: 1rem;
}
.quantity-selector input {
  width: 60px;
  padding: 6px;
  background: #111;
  border: 2px solid #333;
  border-radius: 6px;
  color: #fff;
  text-align: center;
  font-size: 1rem;
}


/*—— Buy button loading state ——*/
#mh-buy-button.loading {
  opacity: 0.5;
  cursor: wait;
}
</style>
