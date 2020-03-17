<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(

	////////////////////////////////////////
	// Localized JS Message Configuration //
	////////////////////////////////////////

	/**
	 * Validation Messages
	 */
	'validation' => array(
		'alphabet'     => __('Value needs to be Alphabet', 'elservice'),
		'alphanumeric' => __('Value needs to be Alphanumeric', 'elservice'),
		'numeric'      => __('Value needs to be Numeric', 'elservice'),
		'email'        => __('Value needs to be Valid Email', 'elservice'),
		'url'          => __('Value needs to be Valid URL', 'elservice'),
		'maxlength'    => __('Length needs to be less than {0} characters', 'elservice'),
		'minlength'    => __('Length needs to be more than {0} characters', 'elservice'),
		'maxselected'  => __('Select no more than {0} items', 'elservice'),
		'minselected'  => __('Select at least {0} items', 'elservice'),
		'required'     => __('This is required', 'elservice'),
	),

	/**
	 * Import / Export Messages
	 */
	'util' => array(
		'import_success'    => __('Import succeed, option page will be refreshed..', 'elservice'),
		'import_failed'     => __('Import failed', 'elservice'),
		'export_success'    => __('Export succeed, copy the JSON formatted options', 'elservice'),
		'export_failed'     => __('Export failed', 'elservice'),
		'restore_success'   => __('Restoration succeed, option page will be refreshed..', 'elservice'),
		'restore_nochanges' => __('Options identical to default', 'elservice'),
		'restore_failed'    => __('Restoration failed', 'elservice'),
	),

	/**
	 * Control Fields String
	 */
	'control' => array(
		// select2 select box
		'select2_placeholder' => __('Select option(s)', 'elservice'),
		// fontawesome chooser
		'fac_placeholder'     => __('Select an Icon', 'elservice'),
	),

);

/**
 * EOF
 */