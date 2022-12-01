<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = Tribe__Events__Main::postIdHelper( get_the_ID() );

/**
 * Allows filtering of the event ID.
 *
 * @since 6.0.1
 *
 * @param int $event_id
 */
$event_id = apply_filters( 'tec_events_single_event_id', $event_id );

/**
 * Allows filtering of the single event template title classes.
 *
 * @since 5.8.0
 *
 * @param array  $title_classes List of classes to create the class string from.
 * @param string $event_id The ID of the displayed event.
 */
$title_classes = apply_filters( 'tribe_events_single_event_title_classes', [ 'tribe-events-single-event-title' ], $event_id );
$title_classes = implode( ' ', tribe_get_classes( $title_classes ) );

/**
 * Allows filtering of the single event template title before HTML.
 *
 * @since 5.8.0
 *
 * @param string $before HTML string to display before the title text.
 * @param string $event_id The ID of the displayed event.
 */
$before = apply_filters( 'tribe_events_single_event_title_html_before', '<h1 class="' . $title_classes . '">', $event_id );

/**
 * Allows filtering of the single event template title after HTML.
 *
 * @since 5.8.0
 *
 * @param string $after HTML string to display after the title text.
 * @param string $event_id The ID of the displayed event.
 */
$after = apply_filters( 'tribe_events_single_event_title_html_after', '</h1>', $event_id );

/**
 * Allows filtering of the single event template title HTML.
 *
 * @since 5.8.0
 *
 * @param string $after HTML string to display. Return an empty string to not display the title.
 * @param string $event_id The ID of the displayed event.
 */
$title = apply_filters( 'tribe_events_single_event_title_html', the_title( $before, $after, false ), $event_id );

?>

<div id="tribe-events-content" class="tribe-events-single">

	<p class="tribe-events-back">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '
<svg style="margin-right:10px;" width="12" height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.84652 1.64063C9.04091 1.50872 9.26172 1.34743 9.49414 1.22446C9.57055 1.11448 9.89474 1.037 10.0189 0.991244C10.1443 0.945056 10.3017 0.849169 10.4076 0.770517C10.5084 0.695654 10.5582 0.629996 10.6955 0.668151C11.0897 0.77764 11.185 1.14389 11.185 1.49348C11.185 1.83709 11.1722 2.17479 11.105 2.51074C11.0557 2.75725 10.9941 3.00693 10.9274 3.2401C10.8778 3.41396 10.7855 3.56133 10.7243 3.72954C10.6715 3.87471 10.5378 4.03135 10.4364 4.1454C10.2852 4.31548 10.1666 4.5465 10.0557 4.74361C9.93719 4.95433 9.83006 5.18851 9.68785 5.3834C9.55013 5.57212 9.39906 5.74941 9.27038 5.94481C9.08463 6.22688 8.93218 6.57296 8.70577 6.82452C8.58191 6.96214 8.43205 7.07778 8.3219 7.22759C8.16874 7.43588 8.05083 7.66811 7.92203 7.89137C7.74723 8.19436 7.53557 8.4713 7.32702 8.75189C7.18719 8.94003 7.06548 9.14616 6.91756 9.3277C6.83422 9.42997 6.73869 9.52549 6.67924 9.64439C6.58896 9.82495 6.47087 10.0336 6.34815 10.1914C6.24777 10.3205 6.16382 10.4828 6.05384 10.6009C5.92396 10.7404 5.79095 10.8638 5.65718 10.9975C5.54195 11.1128 5.42619 11.2344 5.30529 11.343C5.19562 11.4416 5.17725 11.463 5.31169 11.5302C5.46337 11.606 5.60862 11.6903 5.76114 11.7637C6.31308 12.0294 6.88468 12.3233 7.36861 12.7026C7.69851 12.9611 7.96874 13.3275 8.20354 13.6719C8.32947 13.8566 8.48538 14.0209 8.6098 14.2093C8.72272 14.3803 8.79196 14.5683 8.9265 14.7259C9.3275 15.1957 9.69032 15.668 10.0173 16.1926C10.448 16.8835 10.8931 17.5701 11.3097 18.2687C11.5953 18.7476 11.9335 19.2904 11.9335 19.8634C11.9335 19.9498 11.9655 20.2393 11.8327 20.2393C11.6907 20.2393 11.5465 20.1866 11.4137 20.1401C11.019 20.002 10.6152 19.8713 10.2125 19.7499C9.96382 19.6749 9.73701 19.5926 9.50231 19.4779C9.08739 19.2753 8.64435 19.1304 8.24032 18.9037C7.95499 18.7437 7.70726 18.5213 7.43579 18.3391C7.09136 18.1081 6.76245 17.8548 6.42172 17.6194C5.54438 17.0132 4.69199 16.3542 3.84497 15.7048C3.58708 15.5071 3.36387 15.2772 3.11081 15.073C2.52864 14.6033 1.89856 14.1476 1.46016 13.5311C1.13642 13.0759 0.675308 12.6615 0.434897 12.1524C0.375094 12.0257 0.344766 11.8875 0.287745 11.7621C0.260908 11.7031 0.300025 11.6816 0.30214 11.6245C0.307722 11.4738 0.353704 11.2806 0.417303 11.1415C0.581447 10.7824 0.68695 10.373 0.937131 10.0603C1.36929 9.52006 1.78189 8.96657 2.22471 8.43519C2.55669 8.03681 2.91824 7.64996 3.23877 7.24038C3.53051 6.86761 3.91361 6.56158 4.21125 6.18953C4.39658 5.95787 4.62846 5.69801 4.85104 5.50016C5.32068 5.0827 5.71606 4.58566 6.15301 4.13901C6.60255 3.67948 6.97271 3.14943 7.44059 2.70908C7.57831 2.57945 7.70319 2.42399 7.85805 2.31881C8.18854 2.09432 8.51608 1.86486 8.84652 1.64063Z" fill="#112213"/>
</svg>
' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
	</p>

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<?php echo $title; ?>

	<div class="tribe-events-schedule tribe-clearfix">
		<?php echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
		<?php if ( tribe_get_cost() ) : ?>
			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
		<?php endif; ?>
	</div>

	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Event featured image, but exclude link -->
			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>

			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">
				<?php the_content(); ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	<!-- #tribe-events-footer -->

  <section class="single-event-carousel">
    <h2>More Events</h2>
    <div id="upcoming-events-carousel">
      <?php echo do_shortcode('[events-calendar-templates category="all" template="carousel-view" style="style-3" date_format="MD,YT" start_date="" end_date="" limit="10" order="ASC" hide-venue="no" socialshare="no" time="all" columns="3" venues="" organizers="" autoplay="false" tags="" featured-only="false" show-description="yes"]'); ?>
    </div>
  </section>
</div><!-- #tribe-events-content -->
