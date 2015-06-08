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

class Blog_Model_Blog extends Mage_Core_Model_Abstract{
    public function _construct(){
        parent::_construct();
        $this->_init('blog/blog');
    }
	
	public function getShortContent(){
		$content = $this->getData('short_content');
		if(Mage::getStoreConfig(Blog_Helper_Config::XML_BLOG_PARSE_CMS)){
			$processor = Mage::getModel('core/email_template_filter');
			$content = $processor->filter($content);
		}
        return $content;
	}

	public function getPostContent(){
		$content = $this->getData('post_content');
		if(Mage::getStoreConfig(Blog_Helper_Config::XML_BLOG_PARSE_CMS)){
			$processor = Mage::getModel('core/email_template_filter');
			$content = $processor->filter($content);
		}
        return $content;
	}
}
