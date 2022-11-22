<?php
/**
 * View: Series Relationship Icon Link
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events-pro/v2/components/series-relationship-icon-link.php
 *
 * See more documentation about our views templating system.
 *
 * @link https://evnt.is/1aiy
 *
 * @since 6.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 *
 * @version 6.0.0
 */

use TEC\Events\Custom_Tables\V1\Models\Occurrence;
use TEC\Events_Pro\Custom_Tables\V1\Templates\Templates;

$id = $id = $event->ID;

// This is an occurrence the real post ID is hold as a reference on the occurrence table.
if ( isset( $event->_tec_occurrence ) && $event->_tec_occurrence instanceof Occurrence ) {
	$id = $event->_tec_occurrence->post_id;
}

$series = tec_event_series( $id );

if ( ! $series instanceof WP_Post ) {
	return;
}
?>

<span class="tribe-events-calendar-series-archive__container">
	<a
		href="<?php the_permalink( $series->ID );?>"
		title="<?php esc_attr_e( 'Event Series', 'tribe-events-calendar-pro' ); ?>"
		class="tribe-events-calendar-series-archive__link"
	>
		<?php tribe( Templates::class )->template( 'components/icons/series', [ 'classes' => [ 'tribe-events-series-archive__icon' ] ] ); ?>
	</a>
</span>