<?php
/**
 * View: Top Bar Navigation Next Disabled Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events-pro/v2/widgets/shortcodes/components/top-bar/nav/next-disabled.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.6.0
 *
 */
?>
<li class="tribe-events-c-top-bar__nav-list-item">
	<button
		class="tribe-common-c-btn-icon tribe-common-c-btn-icon--caret-right tribe-events-c-top-bar__nav-link tribe-events-c-top-bar__nav-link--next"
		aria-label="<?php esc_attr_e( 'Next month', 'tribe-events-calendar-pro' ); ?>"
		title="<?php esc_attr_e( 'Next month', 'tribe-events-calendar-pro' ); ?>"
		disabled
	>
		<?php $this->template( 'components/icons/caret-right', [ 'classes' => [ 'tribe-common-c-btn-icon__icon-svg', 'tribe-events-c-top-bar__nav-link-icon-svg' ] ] ); ?>
	</button>
</li>
