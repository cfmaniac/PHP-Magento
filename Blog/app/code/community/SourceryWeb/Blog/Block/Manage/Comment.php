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

class Blog_Block_Manage_Comment extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'manage_comment';
    $this->_blockGroup = 'blog';
    $this->_headerText = Mage::helper('blog')->__('Blog Comment Manager');
    parent::__construct();
	$this->setTemplate('Blog/comments.phtml');
	$this->_removeButton('add');
  }
}
