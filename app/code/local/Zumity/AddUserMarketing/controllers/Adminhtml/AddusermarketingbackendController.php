<?php
class Zumity_AddUserMarketing_Adminhtml_AddusermarketingbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Customer Email Marketing"));
	   $this->renderLayout();
    }
}