<?php
/**
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Database\Tests;

use Joomla\Test\Helper;

require_once __DIR__ . '/Stubs/nosqldriver.php';

/**
 * Test class for JDatabaseDriver.
 * Generated by PHPUnit on 2009-10-08 at 22:00:38.
 *
 * @since    1.0
 */
class JDatabaseDriverTest extends \Joomla\Database\Tests\DatabaseCase
{
	/**
	 * @var    \Joomla\Database\Driver
	 * @since  1.0
	 */
	protected $instance;

	/**
	 * Test for the Joomla\Database\Driver::__call method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function test__callQuote()
	{
		$this->assertThat(
			$this->instance->q('foo'),
			$this->equalTo($this->instance->quote('foo')),
			'Tests the q alias of quote.'
		);
	}

	/**
	 * Test for the Joomla\Database\Driver::__call method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function test__callQuoteName()
	{
		$this->assertThat(
			$this->instance->qn('foo'),
			$this->equalTo($this->instance->quoteName('foo')),
			'Tests the qn alias of quoteName.'
		);
	}

	/**
	 * Test for the Joomla\Database\Driver::__call method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function test__callUnknown()
	{
		$this->assertThat(
			$this->instance->foo(),
			$this->isNull(),
			'Tests for an unknown method.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement test__construct().
	 *
	 * @return void
	 */
	public function test__construct()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetInstance().
	 *
	 * @return void
	 */
	public function testGetInstance()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement test__destruct().
	 *
	 * @return void
	 */
	public function test__destruct()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Tests the Joomla\Database\Driver::getConnection method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetConnection()
	{
		$this->assertNull($this->instance->getConnection());
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetConnectors().
	 *
	 * @return void
	 */
	public function testGetConnectors()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Tests the Joomla\Database\Driver::getCount method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetCount()
	{
		$this->assertEquals(0, $this->instance->getCount());
	}

	/**
	 * Tests the Joomla\Database\Driver::getDatabase method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetDatabase()
	{
		$this->assertEquals('europa', Helper::invoke($this->instance, 'getDatabase'));
	}

	/**
	 * Tests the Joomla\Database\Driver::getDateFormat method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetDateFormat()
	{
		$this->assertThat(
			$this->instance->getDateFormat(),
			$this->equalTo('Y-m-d H:i:s')
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::splitSql method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testSplitSql()
	{
		$this->assertThat(
			$this->instance->splitSql('SELECT * FROM #__foo;SELECT * FROM #__bar;'),
			$this->equalTo(
				array(
					'SELECT * FROM #__foo;',
					'SELECT * FROM #__bar;'
				)
			),
			'splitSql method should split a string of multiple queries into an array.'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::getLog method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetLog()
	{
		$this->assertEquals(array(), $this->instance->getLog());
	}

	/**
	 * Tests the Joomla\Database\Driver::getPrefix method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetPrefix()
	{
		$this->assertThat(
			$this->instance->getPrefix(),
			$this->equalTo('&')
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::getNullDate method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetNullDate()
	{
		$this->assertThat(
			$this->instance->getNullDate(),
			$this->equalTo('1BC')
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::getMinimum method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testGetMinimum()
	{
		$this->assertThat(
			$this->instance->getMinimum(),
			$this->equalTo('12.1'),
			'getMinimum should return a string with the minimum supported database version number'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::isMinimumVersion method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testIsMinimumVersion()
	{
		$this->assertThat(
			$this->instance->isMinimumVersion(),
			$this->isTrue(),
			'isMinimumVersion should return a boolean true if the database version is supported by the driver'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::setDebug method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testSetDebug()
	{
		$this->assertThat(
			$this->instance->setDebug(true),
			$this->isType('boolean'),
			'setDebug should return a boolean value containing the previous debug state.'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::setQuery method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testSetQuery()
	{
		$this->assertThat(
			$this->instance->setQuery('SELECT * FROM #__dbtest'),
			$this->isInstanceOf('Joomla\Database\Driver'),
			'setQuery method should return an instance of Joomla\Database\Driver.'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::replacePrefix method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testReplacePrefix()
	{
		$this->assertThat(
			$this->instance->replacePrefix('SELECT * FROM #__dbtest'),
			$this->equalTo('SELECT * FROM &dbtest'),
			'replacePrefix method should return the query string with the #__ prefix replaced by the actual table prefix.'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quote method.
	 *
	 * @return  void
	 *
	 * @covers  Joomla\Database\Driver::quote
	 * @since   1.0
	 */
	public function testQuote()
	{
		$this->assertThat(
			$this->instance->quote('test', false),
			$this->equalTo("'test'"),
			'Tests the without escaping.'
		);

		$this->assertThat(
			$this->instance->quote('test'),
			$this->equalTo("'-test-'"),
			'Tests the with escaping (default).'
		);

		$this->assertEquals(
			array("'-test1-'", "'-test2-'"),
			$this->instance->quote(array('test1', 'test2')),
			'Check that the array is quoted.'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quote method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testQuoteBooleanTrue()
	{
		$this->assertThat(
			$this->instance->quote(true),
			$this->equalTo("'-1-'"),
			'Tests handling of boolean true with escaping (default).'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quote method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testQuoteBooleanFalse()
	{
		$this->assertThat(
			$this->instance->quote(false),
			$this->equalTo("'--'"),
			'Tests handling of boolean false with escaping (default).'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quote method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testQuoteNull()
	{
		$this->assertThat(
			$this->instance->quote(null),
			$this->equalTo("'--'"),
			'Tests handling of null with escaping (default).'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quote method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testQuoteInteger()
	{
		$this->assertThat(
			$this->instance->quote(42),
			$this->equalTo("'-42-'"),
			'Tests handling of integer with escaping (default).'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quote method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testQuoteFloat()
	{
		$this->assertThat(
			$this->instance->quote(3.14),
			$this->equalTo("'-3.14-'"),
			'Tests handling of float with escaping (default).'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::quoteName method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testQuoteName()
	{
		$this->assertThat(
			$this->instance->quoteName('test'),
			$this->equalTo('[test]'),
			'Tests the left-right quotes on a string.'
		);

		$this->assertThat(
			$this->instance->quoteName('a.test'),
			$this->equalTo('[a].[test]'),
			'Tests the left-right quotes on a dotted string.'
		);

		$this->assertThat(
			$this->instance->quoteName(array('a', 'test')),
			$this->equalTo(array('[a]', '[test]')),
			'Tests the left-right quotes on an array.'
		);

		$this->assertThat(
			$this->instance->quoteName(array('a.b', 'test.quote')),
			$this->equalTo(array('[a].[b]', '[test].[quote]')),
			'Tests the left-right quotes on an array.'
		);

		$this->assertThat(
			$this->instance->quoteName(array('a.b', 'test.quote'), array(null, 'alias')),
			$this->equalTo(array('[a].[b]', '[test].[quote] AS [alias]')),
			'Tests the left-right quotes on an array.'
		);

		$this->assertThat(
			$this->instance->quoteName(array('a.b', 'test.quote'), array('alias1', 'alias2')),
			$this->equalTo(array('[a].[b] AS [alias1]', '[test].[quote] AS [alias2]')),
			'Tests the left-right quotes on an array.'
		);

		$this->assertThat(
			$this->instance->quoteName((object) array('a', 'test')),
			$this->equalTo(array('[a]', '[test]')),
			'Tests the left-right quotes on an object.'
		);

// 		TestReflection::setValue($this->db, 'nameQuote', '/');

		$refl = new \ReflectionClass($this->instance);
		$property = $refl->getProperty('nameQuote');
		$property->setAccessible(true);
		$property->setValue($this->instance, '/');

		$this->assertThat(
			$this->instance->quoteName('test'),
			$this->equalTo('/test/'),
			'Tests the uni-quotes on a string.'
		);
	}

	/**
	 * Tests the Joomla\Database\Driver::truncateTable method.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function testTruncateTable()
	{
		$this->assertNull(
			$this->instance->truncateTable('#__dbtest'),
			'truncateTable should not return anything if successful.'
		);
	}

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		$this->instance = \Joomla\Database\Driver::getInstance(
			array(
				'driver' => 'nosql',
				'database' => 'europa',
				'prefix' => '&',
			)
		);
	}

	/**
	 * Tears down the fixture.
	 *
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
		// We need this to be empty.
	}
}
