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

class Blog_Model_Mysql4_Related_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('blog/related');
    }

	public function toOptionArray()
    {
        return $this->_toOptionArray('post_id', 'product_id');
    }
	
	public function addPostFilter($postId)
    {
        $this->getSelect()
            ->where('post_id = ?', $postId);
        return $this;
    }
}
