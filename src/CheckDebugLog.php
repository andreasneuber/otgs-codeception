<?php

namespace Codeception\Module;

use Codeception\Module;
use Codeception\TestInterface;

class CheckDebugLog extends Module {
	private $debug_status;
	private $debug_log_status;
	private $debug_log_path;

	public function _initialize() {
		$this->debug_status     = ( isset( $this->config['debug'] ) ) ? (bool) $this->config['debug'] : false;
		$this->debug_log_status = ( isset( $this->config['debugLog'] ) ) ? (bool) $this->config['debugLog'] : false;
		$this->debug_log_path   = ( isset( $this->config['WPPath'] ) ) ? $this->config['WPPath'] . 'wp-content/debug.log' : '../../debug.log';
	}

	public function _before( TestInterface $step ) {
		if ( $this->debug_log_status == true && file_exists( $this->debug_log_path ) ) {
			unlink( $this->debug_log_path );
		}
	}

	public function _after( TestInterface $step ) {
		if ( $this->debug_log_status == true && file_exists( $this->debug_log_path ) ) {
			copy( $this->debug_log_path, codecept_output_dir() . '/debug.log' );
			$this->fail( "Debug log has been altered. Test failed." );
		}
	}

	public function debugIsEnabled() {
		return (bool) $this->debug_status;
	}
}
