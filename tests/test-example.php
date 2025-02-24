<?php

class Example_Test extends WP_UnitTestCase {

	function test_wordpress_and_plugin_are_loaded() {
		$this->assertTrue( false );
		$this->assertTrue( function_exists( 'do_action' ) );
		$this->assertTrue( function_exists( 'example_plugin_file' ) );
		$this->assertTrue( class_exists( 'Example\\Plugin' ) );
	}

	function test_wp_phpunit_is_loaded_via_composer() {
		$this->assertStringStartsWith(
			dirname( __DIR__ ) . '/vendor/',
			getenv( 'WP_PHPUNIT__DIR' )
		);

		$this->assertStringStartsWith(
			dirname( __DIR__ ) . '/vendor/',
			( new ReflectionClass( 'WP_UnitTestCase' ) )->getFileName()
		);
	}
}
