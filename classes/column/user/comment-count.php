<?php

/**
 * CPAC_Column_User_Comment_Count
 *
 * @since 2.0.0
 */
class CPAC_Column_User_Comment_Count extends CPAC_Column {

	function __construct( $storage_model ) {

		// define properties
		$this->properties['type']	 = 'column-user_commentcount';
		$this->properties['label']	 = __( 'Comment Count' );

		parent::__construct( $storage_model );
	}

	/**
	 * @see CPAC_Column::get_value()
	 * @since 2.0.0
	 */
	function get_value( $user_id ) {

		$value = get_comments( array(
			'user_id'	=> $user_id,
			'count'		=> true
		));

		return $value;
	}
}