<?php
/**
* Sourcery Web Development
*
* @title	  Magento Custom Payment Module for Cash On Delivery
* @category   Mage
* @package    Mage_Local
* @author	  James Harvey
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
**/

class Mage_COD_Model_PaymentMethod extends Mage_Payment_Model_Method_Abstract
{
protected $_code  = 'COD';
//protected $_formBlockType = 'payment/form_checkmo';
//protected $_infoBlockType = 'payment/info_cod';

/**
* Assign data to info model instance
*
* @param   mixed $data
* @return  Mage_Payment_Model_Method_Checkmo
*/
public function assignData($data)
{
$details = array();
if ($this->getPayableTo()) {
$details['payable_to'] = $this->getPayableTo();
}
if ($this->getMailingAddress()) {
$details['mailing_address'] = $this->getMailingAddress();
}
if (!empty($details)) {
$this->getInfoInstance()->setAdditionalData(serialize($details));
}
return $this;
}

public function getPayableTo()
{
return $this->getConfigData('payable_to');
}

public function getMailingAddress()
{
return $this->getConfigData('mailing_address');
}

}
