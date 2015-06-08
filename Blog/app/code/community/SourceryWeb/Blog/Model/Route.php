<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/LICENSE-L.txt
 *
 * @category   SourceryWeb
 * @package    Blog
 * @copyright  Copyright (c) 2010 James Harvey (http://alteredpixels.net/)
 * @license    http://ecommerce.aheadworks.com/LICENSE-L.txt
 */

class Blog_Model_Route extends Mage_Core_Model_Config_Data{
	
	public function toOptionArray(){
        $options = array();
		return $options;
    }
	
	protected function _beforeSave(){
		$value = $this->getValue();
		if (trim($value) == "") {
			$value = "blog";
		}
		$this->setValue($value);
		return $this;
	}
}
