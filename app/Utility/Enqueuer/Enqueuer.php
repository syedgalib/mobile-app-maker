<?php

namespace MobileAppMaker\Utility\Enqueuer;

abstract class Enqueuer extends Enqueuer_Base {

	public $asset_group = 'public';

    public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );   
        add_action( 'admin_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

	/**
	 * Load Scripts
	 *
	 * @return void
	 */
	abstract public function load_scripts();

	/**
	 * Enqueue Scripts
	 *
	 * @return void
	 */
	public function register_scripts() {
        // Set Script Version
		$this->setup_script_version();

		// Load Script
		$this->load_scripts();

		// Apply Hook to Scripts
		$this->apply_hook_to_scripts();

        // Register Scripts
		$this->register_css_scripts();
		$this->register_js_scripts();
    }

	/**
	 * Enqueue Scripts
	 *
	 * @return void
	 */
	public function enqueue_scripts( $page = '' ) {
        // Enqueue Scripts
		$this->enqueue_css_scripts_by_group( [ 'group' => $this->asset_group, 'page' => $page ] );
		$this->enqueue_js_scripts_by_group( [ 'group' => $this->asset_group, 'page' => $page ] );
	}

	/**
	 * Set Script Version
	 *
	 * @return void
	 */
	public function setup_script_version() {
		$script_version = ( $this->load_min ) ? MAM_VERSION : md5( time() );
		$this->script_version = apply_filters( 'mam_script_version', $script_version );
	}

	/**
	 * Apply Hook to Scripts
	 *
	 * @return void
	 */
	public function apply_hook_to_scripts() {
		$this->css_scripts = apply_filters( 'mam_css_scripts', $this->css_scripts );
		$this->js_scripts = apply_filters( 'mam_js_scripts', $this->js_scripts );
	}
}