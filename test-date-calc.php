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
		$datetime = new DateTime('tomorrow');

		// Checking date
		$arr['day'] = 1;
		$result = date_add_func($arr);
		$this->assertEquals( $result, $datetime->format('d.m.Y') );

		// Checking format
		$arr['format'] = 'm/d/Y';
		$result = date_add_func($arr);
		$this->assertEquals( $result, $datetime->format($arr['format']) );
	}

	/**
	 * Test Date Sub function
	 */

	function test_date_sub_func() {
		$arr = array();
		$datetime = new DateTime('yesterday');

		// Checking date
		$arr['day'] = 1;
		$result = date_sub_func($arr);
		$this->assertEquals( $result, $datetime->format('d.m.Y') );

		// Checking format
		$arr['format'] = 'm/d/Y';
		$result = date_sub_func($arr);
		$this->assertEquals( $result, $datetime->format($arr['format']) );
	}

	/**
	 * Test Date Now function
	 */

	function test_date_now_func() {
		$arr = array();
		$datetime = new DateTime('now');

		// Checking day
		$arr['show'] = 'dayonly';
		$result = date_now_func($arr);
		$this->assertEquals( $result, $datetime->format('d') );

		// Checking month
		$arr['show'] = 'monthonly';
		$result = date_now_func($arr);
		$this->assertEquals( $result, $datetime->format('m') );

		// Checking year
		$arr['show'] = 'yearonly';
		$result = date_now_func($arr);
		$this->assertEquals( $result, $datetime->format('Y') );

		// Checking month
		$arr['show'] = 'all';
		$result = date_now_func($arr);
		$this->assertEquals( $result, $datetime->format('d.m.Y') );

		// Checking format
		$arr['format'] = 'm/d/Y';
		$result = date_now_func($arr);
		$this->assertEquals( $result, $datetime->format($arr['format']) );
	}

	/**
	 * Test Date Say function
	 */

	function test_date_say_func() {
		$arr = array();
		$datetime = new DateTime('next tuesday');

		// Checking date
		$arr['what'] = 'next tuesday';
		$arr['show'] = 'all';
		$result = date_add_func($arr);
		$this->assertEquals( $result, $datetime->format('d.m.Y') );

		// Checking format
		$arr['show'] = 'all';
		$arr['format'] = 'm/d/Y';
		$result = date_add_func($arr);
		$this->assertEquals( $result, $datetime->format($arr['format']) );
	}
}
