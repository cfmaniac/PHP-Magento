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

class Blog_Model_Status extends Varien_Object{
    
	const STATUS_ENABLED	= 1;
    const STATUS_DISABLED	= 2;
	const STATUS_HIDDEN		= 3;

	public function addEnabledFilterToCollection($collection)
    {
        $collection->addEnableFilter(array('in'=>$this->getEnabledStatusIds()));
        return $this;
    }
	
	public function addCatFilterToCollection($collection, $cat)
    {
        $collection->addCatFilter($cat);
        return $this;
    }
	
	public function getEnabledStatusIds()
    {
        return array(self::STATUS_ENABLED);
    }
	
	public function getDisabledStatusIds()
    {
        return array(self::STATUS_DISABLED);
    }
	
	public function getHiddenStatusIds()
    {
        return array(self::STATUS_HIDDEN);
    }

    static public function getOptionArray()
    {
        return array(
            self::STATUS_ENABLED    => Mage::helper('blog')->__('Enabled'),
            self::STATUS_DISABLED   => Mage::helper('blog')->__('Disabled'),
			self::STATUS_HIDDEN		=> Mage::helper('blog')->__('Hidden')
        );
    }
}
