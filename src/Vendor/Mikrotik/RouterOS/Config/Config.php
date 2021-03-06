<?php
/**
 * NetDeviceLib
 * Copyright (c) PRONIQUE Software (http://pronique.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) PRONIQUE Software (http://pronique.com)
 * @link          http://pronique.com NetDeviceLib Project
 * @since         0.5.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace NetDeviceLib\Vendor\Mikrotik\RouterOS\Config;

use NetDeviceLib\Config\ConfigInterface;
use NetDeviceLib\Config\BaseConfig;

class Config extends BaseConfig implements ConfigInterface {

	protected $_device;

	function __construct( $Device ) {
		parent::__construct($Device);
	}

	public function read() {
		return $this->_device->Client->execute('export');
	}

	public function update( $config ) {
		//Danger!
		//return $this->_device->execute( $config );
	}

	public function save( ) {
		return;
	}

	public function erase() {
		//Danger!
		//return $this->_device->execute('/system reset-config');
	}

}