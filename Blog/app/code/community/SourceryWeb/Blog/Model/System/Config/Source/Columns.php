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
class Blog_Model_System_Config_Source_Columns
{

    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('adminhtml')->__('Yes, all pages')),
			array('value'=>2, 'label'=>Mage::helper('adminhtml')->__('Yes, only blog page')),
            array('value'=>0, 'label'=>Mage::helper('adminhtml')->__('No')),
        );
    }

}
