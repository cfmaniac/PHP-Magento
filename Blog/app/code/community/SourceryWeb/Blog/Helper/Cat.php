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

class Blog_Helper_Cat extends Mage_Core_Helper_Abstract
{
    /**
    * Renders CMS page
    *
    * Call from controller action
    *
    * @param Mage_Core_Controller_Front_Action $action
    * @param integer $pageId
    * @return boolean
    */
    public function renderPage(Mage_Core_Controller_Front_Action $action, $identifier=null)
    {
		if (!$cat_id = Mage::getSingleton('blog/cat')->load($identifier)->getcatId())
		{
			return false;
		}

		$page_title = Mage::getSingleton('blog/cat')->load($identifier)->getTitle();
		$blog_title = Mage::getStoreConfig('blog/blog/title') . " - ";
	
        $action->loadLayout();
		if ($storage = Mage::getSingleton('customer/session')) {
            $action->getLayout()->getMessagesBlock()->addMessages($storage->getMessages(true));
        }
		$action->getLayout()->getBlock('head')->setTitle($blog_title . $page_title);
		if (Mage::getStoreConfig('blog/rss/enable'))
		{
			$action->getLayout()->getBlock('head')->addItem("rss",Mage::getUrl(Mage::getStoreConfig('blog/blog/route') . "/cat/" .$identifier) . "rss");
		}
		$action->getLayout()->getBlock('root')->setTemplate(Mage::getStoreConfig('blog/blog/layout'));
        $action->renderLayout();

        return true;
    }
}
