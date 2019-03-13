<?php
/**
 * Assertions related to checking for WP_Error things
 *
 * @since    1.3.0
 * @version  1.3.0
 */
trait LLMS_Unit_Test_Assertions_WP_Error {

	/**
	 * Assert that a give object is a WP_Error
	 *
	 * @param   obj    $wp_err WP_Error.
	 * @return  void
	 * @since   1.2.1
	 * @version 1.3.0
	 */
	public function assertIsWPError( $wp_err ) {

		$this->assertTrue( is_a( $wp_err, 'WP_Error' ) );

	}

	/**
	 * Arrest that a given object has an expected WP_Error code.
	 *
	 * @param   string    $expected expected error code
	 * @param   obj    $wp_err WP_Error.
	 * @return  void
	 * @since   1.2.1
	 * @version 1.3.0
	 */
	public function assertWPErrorCodeEquals( $expected, $wp_err ) {

		$this->assertEquals( $expected, $wp_err->get_error_code() ) ;

	}

}