<?php
class Zumity_AddUserMarketing_Block_Adminhtml_Addusermarketing_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("addusermarketing_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("addusermarketing")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("addusermarketing")->__("Item Information"),
				"title" => Mage::helper("addusermarketing")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("addusermarketing/adminhtml_addusermarketing_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
