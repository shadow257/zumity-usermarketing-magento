<?php


class Zumity_AddUserMarketing_Block_Adminhtml_Addusermarketing extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_addusermarketing";
	$this->_blockGroup = "addusermarketing";
	$this->_headerText = Mage::helper("addusermarketing")->__("Customer Email Marketing Manager");
	$this->_addButtonLabel = Mage::helper("addusermarketing")->__("Add New Item");
	parent::__construct();
	
	}

}