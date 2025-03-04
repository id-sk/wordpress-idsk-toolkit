<?php
/**
 * BLOCK - heading - register dynamic block.
 *
 * @link https://slovenskoit.sk
 *
 * @package WordPress
 * @subpackage ID-SK
 * @since ID-SK 1.0
 */

/**
 * Register heading.
 */
function idsktk_register_dynamic_heading_block() {
    // Only load if Gutenberg is available.
    if ( ! function_exists( 'register_block_type' ) ) {
        return;
    }

    // Hook server-side rendering into render callback.
    register_block_type(
        'idsk/heading',
        array(
            'render_callback' => 'idsktk_render_dynamic_heading_block',
        )
    );
}
add_action( 'init', 'idsktk_register_dynamic_heading_block' );

/**
 * Render heading.
 *
 * @param array $attributes Block attributes.
 */
function idsktk_render_dynamic_heading_block( $attributes ) {
    // Block attributes with validation.
    $anchor        = isset( $attributes['anchor'] ) ? sanitize_key( $attributes['anchor'] ) : '';
    $heading_type  = isset( $attributes['headingType'] ) ? $attributes['headingType'] : 'h1';
    $heading_class = isset( $attributes['headingClass'] ) ? sanitize_html_class( $attributes['headingClass'] ) : 'xl';
    $heading_text  = isset( $attributes['headingText'] ) ? $attributes['headingText'] : '';
    $is_caption    = isset( $attributes['isCaption'] ) ? (bool) $attributes['isCaption'] : false;
    $caption_text  = isset( $attributes['captionText'] ) ? $attributes['captionText'] : '';

    // Define allowed heading tags.
    $allowed_headings = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
    if ( ! in_array( $heading_type, $allowed_headings, true ) ) {
        $heading_type = 'h2'; // Default to h2 if invalid
    }

    ob_start(); // Turn on output buffering.

    if ( $is_caption ) {
        ?>
        <span class="<?php echo esc_attr( 'govuk-caption-' . ( 's' !== $heading_class ? $heading_class : 'm' ) ); ?>">
            <?php echo wp_kses_post( $caption_text ); ?>
        </span>
        <?php
    }
    ?>
    <<?php echo esc_html( $heading_type ); ?>
        <?php echo ( $anchor !== '' ) ? 'id="' . esc_attr( $anchor ) . '"' : ''; ?>
        class="<?php echo esc_attr( 'govuk-heading-' . $heading_class ); ?>">
        <?php echo wp_kses_post( $heading_text ); ?>
    </<?php echo esc_html( $heading_type ); ?>>

    <?php
    /* END HTML OUTPUT */
    $output = ob_get_contents(); // Collect output.
    ob_end_clean(); // Turn off output buffer.

    return $output; // Print output.
}
