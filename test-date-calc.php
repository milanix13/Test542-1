<?php
/**
 * Class SampleTest
 *
 * @package Date_Calculator
 */

/**
 * Sample test case.
 */
class DateCalculatorTest extends WP_UnitTestCase {

	/**
	 * Test Date Add function
	 */

	function test_date_add_func() {
		$arr = array();

		// Checking date
		$arr['day'] = 1;
		$result = date_add_func($arr);
		$this->assertEquals( $result, '26.09.2016' );

		// Checking format
		$arr['format'] = 'm/d/Y';
		$result = date_add_func($arr);
		$this->assertEquals( $result, '09/26/2016' );
	}

	/**
	 * Test Date Sub function
	 */

	function test_date_sub_func() {
		$arr = array();

		// Checking date
		$arr['day'] = 1;
		$result = date_sub_func($arr);
		$this->assertEquals( $result, '24.09.2016' );

		// Checking format
		$arr['format'] = 'm/d/Y';
		$result = date_sub_func($arr);
		$this->assertEquals( $result, '09/24/2016' );
	}

	/**
	 * Test Date Now function
	 */

	function test_date_now_func() {
		$arr = array();

		// Checking day
		$arr['show'] = 'dayonly';
		$result = date_now_func($arr);
		$this->assertEquals( $result, '25' );

		// Checking month
		$arr['show'] = 'monthonly';
		$result = date_now_func($arr);
		$this->assertEquals( $result, '09' );

		// Checking year
		$arr['show'] = 'yearonly';
		$result = date_now_func($arr);
		$this->assertEquals( $result, '2016' );

		// Checking month
		$arr['show'] = 'all';
		$result = date_now_func($arr);
		$this->assertEquals( $result, '26.09.2016' );

		// Checking format
		$arr['format'] = 'm/d/Y';
		$result = date_now_func($arr);
		$this->assertEquals( $result, '09/26/2016' );
	}

	/**
	 * Test Date Say function
	 */

	function test_date_say_func() {
		$arr = array();

		// Checking date
		$arr['what'] = 'next tuesday';
		$arr['show'] = 'all';
		$result = date_add_func($arr);
		$this->assertEquals( $result, '04.10.2016' );

		// Checking format
		$arr['show'] = 'all';
		$arr['format'] = 'm/d/Y';
		$result = date_add_func($arr);
		$this->assertEquals( $result, '10/04/2016' );
	}
}
