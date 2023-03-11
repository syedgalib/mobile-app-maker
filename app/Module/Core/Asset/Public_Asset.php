<?php

namespace MobileAppMaker\Module\Core\Asset;

use MobileAppMaker\Utility\Enqueuer\Enqueuer;

class Public_Asset extends Enqueuer {

    public $asset_group = 'public';

    public function __construct() {
		parent::__construct();
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );   
    }

    /**
	 * Load CSS Scripts
	 *
	 * @return void
	 */
	public function load_scripts() {
        $this->add_css_scripts();
        $this->add_js_scripts();
    }

    /**
	 * Load CSS Scripts
	 *
	 * @return void
	 */
	public function add_css_scripts() {
		$scripts = [];

		// $scripts['mam-public-main-style'] = [
		// 	'file_name'     => '',
        //     'base_path'     => MAM_CSS_URL,
        //     'dependencies'  => [],
        //     'version'       => $this->script_version,
        //     'group'         => 'public',
        //     'enqueue'       => true,
        //     'force_enqueue' => false,
        //     'media'         => 'all',
        //     'link'          => false
		// ];

		$scripts['mam-public-main-style'] = [
			'file_name' => 'public-main',
		];

		$scripts = array_merge( $this->css_scripts, $scripts );
		$this->css_scripts = $scripts;
	}

    /**
	 * Load JS Scripts
	 *
	 * @return void
	 */
	public function add_js_scripts() {
		$scripts = [];

		// $scripts['mam-public-main-script'] = [
		// 	'file_name'     => '',
        //     'base_path'     => MAM_JS_URL,
        //     'link'          => '',
        //     'dependencies'  => [],
        //     'version'       => $this->script_version,
        //     'group'         => 'public',
        //     'enqueue'       => true,
        //     'force_enqueue' => false,
        //     'has_rtl'       => false,
        //     'in_footer'     => true,
        //     'data'          => null,
		// ];

		$scripts['mam-public-main-script'] = [
			'file_name' => 'public-main',
		];

		$scripts = array_merge( $this->js_scripts, $scripts);
		$this->js_scripts = $scripts;
	}

}